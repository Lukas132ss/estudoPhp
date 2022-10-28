<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

    echo "ERROR:" . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass); // s - string | i - int | d - float 

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "ABCDE";

$stmt->execute();