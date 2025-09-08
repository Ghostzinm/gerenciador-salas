<?php
require './config.php';

$nomeDocente = $_POST['nomeDocente'];
$areaDocente = $_POST['areaDocente'];
$raDocente = $_POST['raDocente'];

$script = "INSERT INTO tb_docente (nome, area, ra_docente) 
            VALUES(:nome, :area, :ra_docente)"; 

$resultadoInserir = $conn->prepare($script)->execute([
    ":nome" => $nomeDocente,
    ":area" => $areaDocente,
    ":ra_docente" => $raDocente ,
]);


if($resultadoInserir){
    $ultimoId = $conn->lastInsertId();
    header("location:./cad-docente.php?lastId={$ultimoI}");
}


echo "<h1>tela cadastro</h1>";


?>