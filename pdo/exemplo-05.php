<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

//iniciar a transacao
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

$id = 2;

$stmt->execute(array($id));

//executar commit da transacao
$conn->commit();

//executar um rollback
//$conn->rollBack();
echo "Rollback OK!!!";