<?php

//SESSÃO
session_start();
$path = "../../../"; //Caminho até a raiz do projeto


include_once($path . "components/header.php"); ?>
<script src=<?= $path . "assets/js/validation_form.js" ?> defer></script>
<main>
    <div class="container">
        <div class="px-4 pt-5 my-5 text-center">
            <h1 class="display-5 fw-bold">CADASTRO DE REGIÃO</h1>
        </div>
        <form id="formRegiao" class="row rounded-0 bg-cinza my-md-2 postition-relative needs-validation" novalidate
              action="<?= $path . "controller/regiao_sorteio/controller_create.php" ?>" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">

                <div class="row p-md-3 text-dark ">

                    <div class="col-sm-12 col-md-12 col-lg-12 bg-dark text-white p-2">
                        <span class="ms-5">Dados da Região</span>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 border shadow bg-cinza-claro">

                        <div class="row p-md-5">
                            <div class="col-sm-12 col-md-12">
                                <label for="nomeRegiaoID" class="ms-1">Nome<strong
                                            class="text-danger">*</strong></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded-0" required name="nome"
                                           id="nomeRegiaoID">
                                    <div class="invalid-feedback">
                                        <p>Por favor preencha o campo corretamente</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <label for="descricaoRegiaoID" class="ms-1">Descrição<strong
                                            class="text-danger">*</strong></label>
                                <div class="input-group mb-3">
                                    <textarea type="text" class="form-control rounded-0" required name="descricao"
                                              id="descricaoRegiaoID" rows="3"> </textarea>
                                    <div class="invalid-feedback">
                                        <p>Por favor preencha o campo corretamente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse bd-highlight pt-4 gap-2 ">
                                <a class="btn btn-secondary px-5 rounded-0"
                                   href="../../../view/regiao-sorteio/index.php">
                                    Cancelar
                                </a>

                                <button class="btn btn-primary px-5 rounded-0" type="submit" id="btnSubmitMd"
                                        name="cadastrar">Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php //Footer ao final da página
include_once($path . "components/footer.php");
