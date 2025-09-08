<?php
require './config.php';

$nomeTurma = $_POST['nomeTurma'];
$sigla = $_POST['sigla'];
$periodos = $_POST['periodos'];
$QtdAlunos = $_POST['QtdAlunos'];

$script = "INSERT INTO tb_turma (nome, sigla, periodo, quant_alunos) 
            VALUES(:nome, :sigla, :periodo, :quant_alunos)"; 

$resultadoInserir = $conn->prepare($script)->execute([
    ":nome" => $nomeTurma,
    ":sigla" => $sigla,
    ":periodo" => $periodos,
    ":quant_alunos" => $QtdAlunos,
]);


if($resultadoInserir){
    $ultimoId = $conn->lastInsertId();
    header("location:./cad-turma.php?lastId={$ultimoI}");
}


echo "<h1>tela cadastro</h1>";


?>