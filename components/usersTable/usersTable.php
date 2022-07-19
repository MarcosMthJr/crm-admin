<?php include_once(__DIR__ . "/listUsers.php"); ?>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="display: flex; justify-content: space-between;">
        <h6 class="m-0 font-weight-bold text-primary">Sistemas</h6>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Exportar para CSV <i class="fas fa-download fa-sm text-white-50"></i></a>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Login</th>
                        <th>Nível</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($resultListUsers) > 0) {
                        foreach ($resultListUsers as $data) {
                            $levelText = $data["level"] == "1" ? "ADM. de Alto Nível" : "ADM. de Baixo Nível";
                            $activeText = $data["status"] == "1" ? "Sim" : "Não";
                            $rowTable = "
                            <tr>
                                <td>#" . $data["id"] . "</td>
                                <td>" . $data["name"] . "</td>
                                <td>" . $data["email"] . "</td>
                                <td>" . $data["login"] . "</td>
                                <td>$levelText</td>
                                <td>$activeText</td>
                                <td><a href='/pages/pageUpdateUser/index.php?id=".$data["id"]."'>Editar</a></td>
                            </tr>
                            ";

                            echo $rowTable;
                        }
                    } else {
                        $rowTable = "
                        <tr>
                            <td colspan='6'>Nenhum usuário encontrado no banco de dados</td>
                        </tr>
                        ";

                        echo $rowTable;
                    }


                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>