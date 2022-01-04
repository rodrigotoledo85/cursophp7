<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuarios = :ID");

$id = 1;
$login = "ADMIN";
$password = "senhasegura";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Atualizado com sucesso";
