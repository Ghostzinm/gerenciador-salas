<?php 

require './conifg.php';

const RESERVA_ATIVADO = 0;
const RESERVA_DESATIVADO = 1;

$id = $_GET["id_deletar"];

var_dump($id);

$script = 'UPDATE tb_reserva_sala SET deletado = :deletado WHERE id = :id';

$resudado = $conn->prepare($script)->execute([
    ':deletado' => RESERVA_DESATIVADO,
    ':id'=> $id
]);

header('Location: ./index.php');