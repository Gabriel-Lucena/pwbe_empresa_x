<?php

require("./funcoes.php");

$funcionarios = lerArquivo("empresaX.json");
$teste = count($funcionarios);

if (isset($_GET["buscar-funcionario"])) {

    $funcionarios = buscarFuncionario($funcionarios, $_GET["buscar-funcionario"]);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa X</title>
</head>

<body>

    <h1>Funcionários da Empresa X</h1>
    <p>A empresa conta com <?= $teste ?> funcionários.</p>

    <form>

        <input type="text" name="buscar-funcionario" placeholder="Buscar funcionário" />
        <button>Buscar</button>


    </form>

    <table>
        <tr>

            <th>ID</th>
            <th>Primeiro nome</th>
            <th>Último nome</th>
            <th>E-mail</th>
            <th>Gênero</th>
            <th>Endereço IP</th>
            <th>País</th>
            <th>Departamento</th>

        </tr>

        <?php

        foreach ($funcionarios as $funcionario) {
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
        }



        ?>
    </table>


</body>

</html>