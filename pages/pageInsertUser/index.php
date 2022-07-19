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
                        include_once(__DIR__ . "/../../components/formUser/formUser.php");
                    
                    ?>

                   
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

       <script src="./sendRequest.js" type="module"></script>


</body>

</html>