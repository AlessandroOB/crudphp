<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <div>
        <form method="POST" action="conectar.php">
            <h1>Cadastro de Pessoas</h1>
            Nome:<br>
            <input type="text" name="txtNom" size="25" maxlength="100"><br>
            Telefone:<br>
            <input type="text" name="txtTel" size="25" maxlength="20"><br>
            Email:<br>
            <input type="text" name="  " size="25" maxlength="200"><br><br>
            <input type="submit" class="botao" value="Cadastrar">
        </form>
    </div>  
    </center>
    <div id="box">
        <h2>LISTA DE PESSOAS</h2>
        <hr>
        <form method="POST">
            <?php
                //Realizar a conexao com o Banco de Dados.
                $conexao = mysqli_connect("localhost","root", "", "siscad");
                //Selecionar os dados da tabela a partir do 1° registro.
                $sql = "SELECT `NOME`, `TELEFONE`, `EMAIL` FROM `pessoas` WHERE 1";
                //Armazenar a seleçao mediante a consulta ao banco de dados.
                $result = $conexao->query($sql);
                //Exibir todos os registros em uma tabela estilizada.
                echo "<table style='width:100%'><tr><td>NOME</td><td>TELEFONE</td><td>EMAIL</td></tr><br>";
                //A funçao fecth_assoc() é usada para retornar uma matriz associativa, onde cada chave representa o nome de uma coluna do conjunto de resultados.
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["NOME"]."</td><td>".$row ["TELEFONE"]."</td><td>".$row ["EMAIL"]."</tr>";
                }
                echo "</table>"
            ?>
        </form>
    </div>
</body>
</html>