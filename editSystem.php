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
                    <!-- main -->
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Editando o sistema: <b>AtivoMake CRM</b></h1>
                    <p class="mb-4">Atenção ao realizar as alterações nas informações dos sistemas, essas alterações causam efeitos colaterais visíveis.</p>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">AtivoMake - CRM</h6>
                        </div>
                        <div class="card-body">
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Razão Social</label>
                                <input type="text" required name="corporateName" class="form-control" id="input-corporate-name" placeholder="Razão Social">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nome Fantasia</label>
                                <input type="text" required name="fantasyName" class="form-control" id="input-fantasy-name" placeholder="Nome Fantasia">
                            </div>
                            <div class="form-group col-md-2">
                                <label>CNPJ</label>
                                <input type="text" required name="cnpj" class="form-control" id="input-cnpj" placeholder="11.111.111/0001-11">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nome contato</label>
                                <input type="text" required name="contactName" class="form-control" id="input-contact-name" placeholder="Nome do contato">
                            </div>
                            <div class="form-group col-md-4">
                                <label>E-mail</label>
                                <input type="email" required name="email" class="form-control" id="input-email" placeholder="email@email.com">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Telefone</label>
                                <input type="text" required name="phoneNumber" class="form-control" id="input-phone-number" placeholder="(00)0000-0000">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>URL</label>
                                <input type="text" required name="url" class="form-control" id="input-url" placeholder="crm-cliente">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Banco de dados</label>
                                <input type="text" required name="database" class="form-control" id="input-database" placeholder="banco-cliente">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Usuário do banco de dados</label>
                                <input type="text" required name="database-user" class="form-control" id="input-database-user" placeholder="root">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Senha do usuário do banco de dados</label>
                                <input type="password" required name="database-pass" class="form-control" id="input-database-pass" placeholder="*******">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Rediecionar para (deixe vazio para deixar o redirecionamento desativado)</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Status do sistema</label>
                                <select id="inputState" class="form-control">
                                    <option disabled selected>Selecione</option>
                                    <option>Ativo</option>
                                    <option>Desativado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Forçar HTTPS
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                        </div>
                    </div>      
                    
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