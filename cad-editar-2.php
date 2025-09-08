<?php
include 'config.php';

// $id = $_GET['idEditar'];
$id = 20;

$script = "SELECT * FROM tb_docente WHERE id = $id";
$dadosResultao = $conn->query($script)->fetch();
print_r($dadosResultao);

 ?>

