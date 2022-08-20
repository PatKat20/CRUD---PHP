<?php

$servername = "localhost";
$user = "root";
$pass = "tesouras1";
$db_name = "crud";

$connect = mysqli_connect($servername, $user, $pass, $db_name);

if(mysqli_connect_error()){
    echo "Erro ao se conectar ao banco de dados". mysqli_connect_error();
}