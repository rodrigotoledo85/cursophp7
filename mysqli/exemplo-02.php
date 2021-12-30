<?php
$conn = new mysqli("127.0.0.1", "root", "root", "dbphp7");

if($conn->connect_error){
  echo "Error: " . $conn->connect_error;
}

$resultadoQuery = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while($row = $resultadoQuery->fetch_assoc()){
  array_push($data, $row);
}

echo json_encode($data);
 ?>
