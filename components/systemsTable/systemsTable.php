<?php include_once(__DIR__ . "/listSystem.php"); ?>
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
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                        <th>URL</th>
                        <th>Ativo</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($resultListSystem) > 0) {
                        foreach ($resultListSystem as $data) {
                            $activeText = $data["system_status"] == "1" ? "Sim" : "Não";
                            $rowTable = "
                            <tr>
                                <td>#" . $data["id"] . "</td>
                                <td>" . $data["corporate_name"] . "</td>
                                <td>" . $data["fantasy_name"] . "</td>
                                <td><a href='https://" . $data["url"] . ".com.br' target='_blank'>" . $data["url"] . "</a></td>
                                <td>$activeText</td>
                                <td><a href='/pages/pageUpdateSystem/pageUpdateSystem.php?id=".$data["id"]."'>Editar</a></td>
                            </tr>
                            ";

                            echo $rowTable;
                        }
                    } else {
                        $rowTable = "
                        <tr>
                            <td colspan='6'>Nenhum sistema encontrado no banco de dados</td>
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