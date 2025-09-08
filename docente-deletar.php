<?php

require './config.php';

$id = $_GET['idDeletar'];
var_dump($id);

const DELETEATIVADO = 0;
const DELETEDESATIVADO = 1;

$script = "UPDATE tb_docente SET desativado = :desativado WHERE id = :id";

$resultadoDeletar = $conn->prepare($script)->execute([
    ':desativado' => DELETEDESATIVADO,
    ':id' => $id
]);

header('location:./cad-docente.php')

?>