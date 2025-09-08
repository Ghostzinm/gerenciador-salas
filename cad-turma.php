<?php
include './template/header.php';
include './template/modal-turma.php';
require './config.php';

$scriptListar = "SELECT * FROM tb_turma WHERE desativado = 0";

$resultadoLista = $conn->query($scriptListar)->fetchAll();

?>

<section class="container mt-5">
    <table class="table table-striped table-hover text-center">
        <div class="text-end mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCadastrar">
                <i class="bi bi-plus-circle"></i> Turma
            </button>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Turma</th>
                <th scope="col">sigla</th>
                <th scope="col">Período</th>
                <th scope="col">Qtd Alunos</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultadoLista as $linha) { ?>
                <tr>
                    <th scope="row"><?= $linha['id'] ?></th>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['sigla'] ?></td>
                    <td><?= $linha['periodo'] ?></td>
                    <td><?= $linha['quant_alunos'] ?></td>
                    <td>
                        <a href="./cad-editar-turma.php?idEditar=<?= $linha['id'] ?>" class="btn btn-warning">
                            <i class="bi bi-pencil"></i>
                        </a>


                        <a href="./turma-deletar.php?idDeletar=<?= $linha["id"] ?>" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    function solicitar() {

        $.ajax({
            url: "cad-editar-2.php",
            success: function(result) {
                console.log(result);
            },
            
        })
    }
</script>