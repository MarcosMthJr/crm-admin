<?php
include_once(__DIR__ . "/../../functions/mask.php");

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
                   

                        /**
                         * Incluindo formulário que realiza update nas informações dos sistemas
                         * O formulário é o mesmo usado para inserir um novo sistema no banco, portanto devemos passar a variavel necessária para identificar a operação realizada
                         * $type é a variável responsável por setar o tipo de operação, sendo eles por enquanto "update" e "insert"
                         */
                        $type = "insert";
                        include_once(__DIR__ . "/../../components/formSystem/formSystem.php");
                    
                    ?>

                    <?php if ($systemInfo['status'] == 404) : ?>
                        <h1 class="h3 mb-2 text-gray-800">Sistema não localizado</h1>
                        <p class="mb-4">Por favor, verifique se um sistema foi selecionado ou volte e selecione um sistema novamente.</p>
                    <?php endif; ?>
                    <?php if ($systemInfo['status'] == 400) : ?>
                        <h1 class="h3 mb-2 text-gray-800">Erro ao localizar sistema</h1>
                        <p class="mb-4">Por favor, verifique se um sistema foi selecionado ou volte e selecione um sistema novamente.</p>
                    <?php endif; ?>

                    <?php if ($systemInfo['status'] == 500) : ?>
                        <h1 class="h3 mb-2 text-gray-800">Erro inesperado ao localizar sistema</h1>
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

       <script src="./sendInsertRequest.js" type="module"></script>


</body>

</html>