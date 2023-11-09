<?php
    $cadastro = false;
    if(isset($_POST['txtNom']) && isset($_POST['txtTel']) && isset($_POST['txtEmail'])) {
        $nome = $_POST['txtNom'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTel'];
        $cadastro = true;
    }
    if ($cadastro==true){
        $conexao = mysqli_connect("localhost","root","","siscad");
        $sql = "INSERT INTO `pessoas`(`ID`,`NOME`,`TELEFONE`, `EMAIL`) VALUES (NULL,'$nome','$telefone', '$email');";
        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
}
?> 