<?php
//PRÉ CONFIGURAÇÃO
$path = "../../";
$_SESSION['restriction'] = 2;
$_SESSION['page-title'] = "Regiões Cadastradas";

//REQUIRES
include_once($path . "controller/regiao_sorteio/controller_index.php");
include_once($path . "components/Mensagem.php");
if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = "";
}
$msg = new Mensagem();
include_once($path . "components/header.php"); ?>
    <div class="event-schedule-area-two bg-color">
        <div class="container">
            <div class="mt-4">
                <?php if (isset($printMsg) && $printMsg != ''): ?>
                    <?= $msg->showMensagem($printMsg, 'success'); ?>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="px-4 pt-5 my-5 text-center">
                        <h1 class="display-5 fw-bold">Gerenciar Regiões</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <a class="btn btn-success mb-2 rounded-circle"
                       href="/view/regiao-sorteio/cadastro/index.php">
                       <span class="material-symbols-outlined">add_home</span>
                    </a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show " id="home" role="tabpanel">
                            <div class="table-responsive shadow">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">ID</th>
                                        <th class="text-center" scope="col">NOME</th>
                                        <th class="text-center" scope="col">DESCRICAO</th>
                                        <th class="text-center" scope="col">AÇÕES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($response)) {
                                        foreach ($response as $key => $regiao) { ?>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="text-center">
                                                        <h5><?= $regiao->id_regiao ?></h5>
                                                    </div>
                                                </th>

                                                <td>
                                                    <div class="text-center ">
                                                        <h5><?= $regiao->nome ?></h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-center">
                                                        <h5><?= $regiao->descricao ?></h5>
                                                    </div>
                                                </td>

                                                <td class="actions">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="d-flex p-1">
                                                            <a type="submit"
                                                               class="btn btn-warning "
                                                               href=<?= $path . "view/regiao-sorteio/alterar" ?>?id=<?= $regiao->id_regiao ?> >
                                                               <span class="material-symbols-outlined">edit_square</span>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex p-1">
                                                            <a type="submit"
                                                               class="btn btn-danger "
                                                               href=<?= $path . "controller/regiao_sorteio/controller_index.php" ?>?id=<?= $regiao->id_regiao ?> >
                                                                <span class="material-symbols-outlined">delete</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include_once($path . "components/footer.php");
