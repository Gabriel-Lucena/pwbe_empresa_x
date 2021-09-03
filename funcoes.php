<?php

// Recebe o nome do arquivo
function lerArquivo($nomearquivo)
{
    // Lê o arquivo como String
    $arquivo = file_get_contents($nomearquivo);

    // Transforma a string em array
    $jsonArray = json_decode($arquivo);

    // Devolve a array
    return $jsonArray;
}

/*
    Busca o aluno dentro da lista e devolve uma lista com os funcionários encontrados
*/

function buscarFuncionario($funcionarios, $nome)
{
    $funcionarioFiltro = [];
    foreach ($funcionarios as $funcionario) {

        if ($funcionario->first_name == $nome) {

            $funcionarioFiltro[] = $funcionario;
        }
    }

    return $funcionarioFiltro;
}
