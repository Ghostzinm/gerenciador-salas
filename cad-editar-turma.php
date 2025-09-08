<?php 
include './template/header.php';
include './template/modal-turma.php';
require './config.php';

$scriptListar = "SELECT * FROM tb_sala WHERE desativado = 0";

$resultadoLista = $conn->query($scriptListar)->fetchAll();


echo"ta contruindo chefe";


?>
