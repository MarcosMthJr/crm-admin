<!DOCTYPE html>
<html lang="pt-BR">
<?php include(__DIR__."/../../components/head/head.php"); ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include './../../components/sidebar/sidebar.php' ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include './../../components/navbar/navbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- -->
                    <?php include './../../components/cardsHeader/cardsHeader.php' ?>

                    <?php include './../../components/systemsTable/systemsTable.php' ?>

                    <!--- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include "./../../components/footer/footer.php" ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include "./../../components/logoutPopup/logoutPopup.php" ?>

        <?php include "./../../components/jsLibs/jsLibs.php" ?>


</body>

</html>