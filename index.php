<!DOCTYPE html>
<html lang="pt-BR">

<?php include './components/head.php' ?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include './components/sidebar.php' ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include './components/navbar.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <?php include './components/cardsHeader.php' ?>

                    <?php include './components/systemsTable.php' ?>

                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include "./components/footer.php" ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include "./components/logoutPopup.php" ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


</body>

</html>