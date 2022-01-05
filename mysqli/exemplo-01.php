<?php
$conn = new mysqli("127.0.0.1", "root", "root", "dbphp7");

if($conn->connect_error){
  echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values(?,?)");

$login = "root";
$senha = "root";

$stmt->bind_param("ss", $login, $senha);

$stmt->execute()
 ?>
