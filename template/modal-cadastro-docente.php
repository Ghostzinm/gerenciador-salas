<div class="modal fade" id="modalCadastrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Cadastro Docente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./docente-cadastro.php" method="POST" id="form-cadastrar-cadastro">
                    <div class="campo-Docente d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">Nome:</label>
                        <input type="text" class="form-control" placeholder="Informe o nome do docente" name="nomeDocente" id="nomeDocente">
                    </div>
                    <div class="campo-Docente d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="qntd-aluno" class="fw-semibold my-auto">RA:</label>
                        <input type="text" class="form-control" placeholder="Digite o RA do docente"
                            name="raDocente" id="raDocente">
                    </div>
                    <div class="campo-Docente d-flex gap-2 mt-2">
                        <label style="width: 20%;" for="drop-sala" class="fw-semibold my-auto">Area:</label>
                        <input type="text" class="form-control" placeholder="Informe o nome a area" name="areaDocente" id="areaDocente">
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