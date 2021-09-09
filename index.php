<?php

require("./funcoes.php");

$funcionarios = lerArquivo("empresaX.json");

$count = count($funcionarios);

if (isset($_GET["buscarFuncionario"])) {
    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscarFuncionario"]);
}

if (
    !empty($_GET["first_name"]) && !empty($_GET["last_name"]) &&
    !empty($_GET["email"]) && !empty($_GET["gender"]) &&
    !empty($_GET["ip_address"]) && !empty($_GET["country"])
    && !empty($_GET["department"])
) {
    adicionarFuncionario([
        "first_name" => $_GET["first_name"],
        "last_name" => $_GET["last_name"],
        "email" => $_GET["email"],
        "gender" => $_GET["gender"],
        "ip_address" => $_GET["ip_address"],
        "country" => $_GET["country"],
        "department" => $_GET["department"],
    ]);

    header('location:' . dirname($_SERVER['PHP_SELF']));
}

// $values = json_encode($_POST);
// file_put_contents('nome_e_path_do_arquivo.ext', $values, FILE_APPEND);

// adicionarFuncionario($funcionarios);


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Empresa X</title>
</head>

<body>

    <h1>Funcionários da empresa X</h1>
    <p class="subtitulo">A empresa conta com <?= $count ?> funcionários</p>

    <form>
        <label for="buscarFuncionario">Digite o nome:</label>
        <input type="text" placeholder="Digite o funcionário" name="buscarFuncionario" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : "" ?>">
        <button>Buscar</button>

    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Sexo</th>
            <th>Endereço IP</th>
            <th>País</th>
            <th>Departamento</th>
        </tr>

        <?php
        foreach ($funcionarios as $funcionario) :
        ?>

            <tr>
                <td><?= $funcionario->id ?></td>
                <td><?= $funcionario->first_name ?></td>
                <td><?= $funcionario->last_name ?></td>
                <td><?= $funcionario->email ?></td>
                <td><?= $funcionario->gender ?></td>
                <td><?= $funcionario->ip_address ?></td>
                <td><?= $funcionario->country ?></td>
                <td><?= $funcionario->department ?></td>
            </tr>

        <?php
        endforeach;
        ?>

    </table>
    <div id="add__new">
        <p>+</p>
    </div>
    <div id="container__modal">
        <!-- <div id="bg"></div> -->
        <div class="modal">
            <h2>Adição de novo funcionário</h2>
            <form>
                <input type="text" name="first_name" required placeholder="Primeiro nome">
                <input type="text" name="last_name" required placeholder="Último nome">
                <input type="text" name="email" required placeholder="Email">
                <select name="gender" id="gender" required placeholder="Sexo">
                    <option value="Male">Masculino</option>
                    <option value="Female">Feminino</option>
                    <option value="Other">Outros</option>
                </select>
                <input type="text" name="ip_address" required placeholder="Endereço IP">
                <input type="text" name="country" required placeholder="País">
                <input type="text" name="department" required placeholder="Departamento">
                <div class="buttons">
                    <button id="cancel" type="button">Cancelar</button>
                    <button id="send">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>