<?php
//Conectando banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "teste-fullstack";

$con = new mysqli($servername, $username, $password, $dbname);

//Testando conexão
if (!$con) {
    die("Não foi possível conectar ao banco de dados" . mysqli_connect_error());
}


?>