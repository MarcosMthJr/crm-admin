<h1 class="h3 mb-2 text-gray-800">
    <?php
    if ($type === "update") {
        echo ('Editando o sistema: <b>' . checkIfItWasDeclared($systemInfo['fantasy_name']) . '</b>');
    } else {
        echo 'Cadastrando novo sistema!';
    }
    ?>
</h1>
<?php if ($type === "update") : ?>
    <p class="mb-4">Atenção ao realizar as alterações nas informações dos sistemas, essas alterações podem causar efeitos colaterais visíveis.</p>
<?php endif; ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <?php if ($type == "update") {
                echo (checkIfItWasDeclared($systemInfo['fantasy_name']) . " - ");
            } else {
                echo "Novo ";
            } ?>
            CRM</h6>
    </div>
    <div class="card-body">

        <!--<form name="form" method="POST" action="/pages/pageUpdateSystem/updateSystemInfo.php"> -->
            <form name="form">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Razão Social</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['corporate_name']));
                                    }
                                    ?>" type="text" required name="corporate_name" class="form-control" id="input-corporate-name" placeholder="Razão Social">
                </div>
                <div class="form-group col-md-4">
                    <label>Nome Fantasia</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['fantasy_name']));
                                    }
                                    ?>" type="text" required name="fantasy_name" class="form-control" id="input-fantasy-name" placeholder="Nome Fantasia">

                </div>
                <div class="form-group col-md-2">
                    <label>CNPJ</label>
                    <input onkeyup="mascara('##.###.###/####-##',this,event,false)" value="<?php
                                                                                            if ($type == "update") {
                                                                                                echo (mask(checkIfItWasDeclared($systemInfo['cnpj']), "##.###.###/####-##"));
                                                                                            }
                                                                                            ?>" type="text" required name="cnpj" class="form-control" id="input-cnpj" placeholder="11.111.111/0001-11">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nome do contato</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['contact_name']));
                                    }
                                    ?>" type="text" required name="contact_name" class="form-control" id="input-contact-name" placeholder="Nome do contato">

                </div>
                <div class="form-group col-md-4">
                    <label>E-mail</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['email']));
                                    }
                                    ?>" type="email" required name="email" class="form-control" id="input-email" placeholder="email@email.com">

                </div>
                <div class="form-group col-md-4">
                    <label>Telefone de contato</label>
                    <input onkeyup="mascara('(##)#####-####',this,event,false)" value="<?php
                                                                                        if ($type == "update") {
                                                                                            echo (mask(checkIfItWasDeclared($systemInfo['phone_number']), "(##)#####-####"));
                                                                                        }
                                                                                        ?>" type="text" required name="phone_number" class="form-control" id="input-phone-number" placeholder="(00)0000-0000">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>URL</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['url']));
                                    }
                                    ?>" type="text" required name="url" class="form-control" id="input-url" placeholder="crm-cliente">

                </div>
                <div class="form-group col-md-6">
                    <label>Banco de dados</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['database']));
                                    }
                                    ?>" type="text" required name="database" class="form-control" id="input-database" placeholder="banco-cliente">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Usuário do banco de dados</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['database_user']));
                                    }
                                    ?>" type="text" required name="database_user" class="form-control" id="input-database-user" placeholder="root">

                </div>
                <div class="form-group col-md-6">
                    <label>Senha do usuário do banco de dados</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($systemInfo['database_password']));
                                    } ?>" type="text" required name="database_password" class="form-control" id="input-database-pass" placeholder="*******">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Rediecionar para (deixe vazio para deixar o redirecionamento desativado)</label>
                    <input name="force_redirect" value="<?php
                                                        if ($type == "update") {
                                                            echo (checkIfItWasDeclared($systemInfo['force_redirect']) != "NULL" ? checkIfItWasDeclared($systemInfo['force_redirect']) : "");
                                                        } ?>" type="text" class="form-control" id="inputCity">

                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Status do sistema</label>
                    <select id="inputState" name="system_status" class="form-control">
                        <option selected disabled>Selecione</option>

                        <option value="1" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($systemInfo['system_status']) == "1" ? "selected" : "");
                                            } ?>>Ativo</option>

                        <option value="2" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($systemInfo['system_status']) == "2" ? "selected" : "");
                                            } ?>>Desativado</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="force_https" value="1" <?php

                                                        if ($type == "update") {
                                                            echo (checkIfItWasDeclared($systemInfo['force_https']) ? "checked" : "");
                                                        } ?> class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Forçar HTTPS
                    </label>
                </div>
            </div>
            <?php
            if ($type == "update") { ?>
                <input value="<?php echo htmlspecialchars($_GET["id"])?>" type="hidden" name="id">
            <?php }
            ?>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>