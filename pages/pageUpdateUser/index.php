<?php
include_once(__DIR__ . "/../../config/conectar.php");
include_once(__DIR__ . "/../../functions/searchSystemById.php");
include_once(__DIR__ . "/../../functions/mask.php");

include_once(__DIR__."/../../functions/dmlFuntions.php");



$userInfo = selectByCondition($pdo, "users", "`id` = ?", htmlspecialchars($_GET["id"])) ;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php include(__DIR__ . '/../../components/head/head.php'); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include(__DIR__ . '/../../components/sidebar/sidebar.php'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include(__DIR__ . '/../../components/navbar/navbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- main -->

                    <?php
                    if ($userInfo !== 404 and $userInfo !== 500 and is_array($userInfo)) {

                        /**
                         * Incluindo formulário que realiza update nas informações dos Usuários
                         * O formulário é o mesmo usado para inserir um novo Usuário no banco, portanto devemos passar a variavel necessária para identificar a operação realizada
                         * $type é a variável responsável por setar o tipo de operação, sendo eles por enquanto "update" e "insert"
                         */
                        $type = "update";
                        include_once(__DIR__ . "/../../components/formUser/formUser.php");
                    }
                    ?>

                    <?php if ($userInfo == 404) : ?>
                        <h1 class="h3 mb-2 text-gray-800">Usuário não localizado</h1>
                        <p class="mb-4">Por favor, verifique se um Usuário foi selecionado ou volte e selecione um Usuário novamente.</p>
                    <?php endif; ?>

                    <?php if ($userInfo == 500) : ?>
                        <h1 class="h3 mb-2 text-gray-800">Erro inesperado ao localizar Usuário</h1>
                        <p class="mb-4">Por favor, entre em contato com o desenvolvedor</p>
                    <?php endif; ?>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include(__DIR__ . "./../../components/footer/footer.php") ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include(__DIR__ . "./../../components/logoutPopup/logoutPopup.php"); ?>

        <?php include(__DIR__ . "./../../components/jsLibs/jsLibs.php"); ?>

       <script src="./sendUpdateRequest.js" type="module"></script>


</body>

</html>