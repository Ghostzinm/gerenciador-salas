<div class="modal fade" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Cadastro Docente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./turma-cadastro.php" method="POST" id="form-cadastrar-cadastro">
                    <div class="campo-turma d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">Nome:</label>
                        <input type="text" class="form-control" placeholder="Informe o nome da Turma" name="nomeTurma" id="nomeTurma">
                    </div>
                    <div class="campo-turma d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="qntd-aluno" class="fw-semibold my-auto">Quantidade de alunos:</label>
                        <input type="text" class="form-control" placeholder="Qual a quantidade de alunos suportados"
                            name="QtdAlunos" id="QtdAlunos">
                    </div>
                    <div class="campo-turma d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">siglas:</label>
                        <input type="text" class="form-control" placeholder="siglas" name="sigla" id="sigla">
                    </div>
                    <div class="campo-turma d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">Período:</label>
                        <select name="periodos" id="periodos">
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                            <option value="Noturno">Noturno</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Fechar
                </button>
                <button type="submit" class="btn btn-primary" form="form-cadastrar-cadastro">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>