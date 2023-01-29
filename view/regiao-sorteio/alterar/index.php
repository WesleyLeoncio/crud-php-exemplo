<?php
$path = "../../../";
include_once($path."controller/regiao_sorteio/controller_edit.php");
include_once("../../../components/header.php"); ?>
<?php if (!empty($response)) { ?>
<main>
    <div class="container">
        <div class="px-4 pt-5 my-5 text-center">
            <h1 class="display-5 fw-bold">ALTERAÇÃO DE REGIÃO</h1>
        </div>
        <form id="formRegiao" class="row rounded-0 bg-cinza my-md-2 postition-relative needs-validation" novalidate
              action="../../../controller/regiao_sorteio/controller_edit.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $response->id_regiao ?>">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">

                <div class="row p-md-3 text-dark ">

                    <div class="col-sm-12 col-md-12 col-lg-12 bg-dark text-white p-2">
                        <span class="ms-5">Dados da Região</span>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-12 border shadow bg-cinza-claro">

                        <div class="row p-md-5">

                            <div class="col-sm-12 col-md-1">
                                <label for="regiaoID" class="ms-1">ID </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded-0" name="id_regiao"
                                           id="regiaoID" value="<?= $response->id_regiao ?>" disabled>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-11">
                                <label for="nomeRegiaoID" class="ms-1">Nome<strong
                                        class="text-danger">*</strong></label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control rounded-0" required name="nome"
                                           id="nomeRegiaoID" value="<?= $response->nome ?>">
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
                                                  id="descricaoRegiaoID" rows="3"><?= $response->descricao ?> </textarea>
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
                                        name="alterar">ALTERAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php } else {
    echo "<h1 class='text-center'>ERRO 404</h1>";
}
?>
<?php include_once("../../../components/header.php"); ?>
