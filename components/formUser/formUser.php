<h1 class="h3 mb-2 text-gray-800">
    <?php
    $userInfo = $userInfo[0];
    if ($type === "update") {
        echo ('Editando o usuário: <b>' . checkIfItWasDeclared($userInfo['name']) . '</b>');
    } else {
        echo 'Cadastrando novo usuário!';
    }
    ?>
</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Usuário: 
            <?php if ($type == "update") {
                echo (checkIfItWasDeclared($userInfo['name']));
            } else {
                echo "Novo ";
            } ?></h6>
    </div>
    <div class="card-body">

        <!--<form name="form" method="POST" action="/pages/pageUpdateSystem/updateuserInfo.php"> -->
            <form name="form">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($userInfo['name']));
                                    }
                                    ?>" type="text" required name="name" class="form-control" id="input-corporate-name" placeholder="Nome do usuário">
                </div>
                <div class="form-group col-md-6">
                    <label>E-mail</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($userInfo['email']));
                                    }
                                    ?>" type="text" required name="email" class="form-control" id="input-fantasy-name" placeholder="E-mail">

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Login</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($userInfo['login']));
                                    }
                                    ?>" type="text" required name="login" class="form-control" id="input-contact-name" placeholder="Login">

                </div>
                <div class="form-group col-md-6">
                    <label>Senha</label>
                    <input value="<?php
                                    if ($type == "update") {
                                        echo (checkIfItWasDeclared($userInfo['password']));
                                    }
                                    ?>" type="password" required name="password" class="form-control" id="input-email" placeholder="********">

                </div>
            </div>  
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputState">Nível de acesso</label>
                    <select id="inputState" name="level" class="form-control">
                        <option selected disabled>Selecione</option>

                        <option value="1" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($userInfo['level']) == "1" ? "selected" : "");
                                            } ?>>Administrador de Alto Nível</option>

                        <option value="2" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($userInfo['level']) == "2" ? "selected" : "");
                                            } ?>>Administrador de Baixo Nível</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Status</label>
                    <select id="inputState" name="status" class="form-control">
                        <option selected disabled>Selecione</option>

                        <option value="1" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($userInfo['status']) == "1" ? "selected" : "");
                                            } ?>>Ativo</option>

                        <option value="2" <?php

                                            if ($type == "update") {
                                                echo (checkIfItWasDeclared($userInfo['status']) == "2" ? "selected" : "");
                                            } ?>>Desativado</option>
                    </select>
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