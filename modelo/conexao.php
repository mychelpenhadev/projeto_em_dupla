<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "crud_php";

if ($conn = mysqli_connect($server, $user, $pass, $db)) {
    echo "Conectado";
} else {
    echo "Erro";
}