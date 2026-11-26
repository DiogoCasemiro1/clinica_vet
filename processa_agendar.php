<?php

require 'conexao.php';

$erros = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_pet = $_POST['nome_pet'];
    $especie = $_POST['especie'];
    $nome_tutor = $_POST['nome_tutor'];
    $tel = $_POST['telefone'];
    $email = $_POST['email'];
    $data = $_POST['data_consulta'];
    $hora = $_POST['horario'];

    if ($nome_pet < 2 || $nome_pet > 60) {
        $erros[] = "O nome do animal ou é muito curto ou é muito longo";
    }

    if ($especie == ' ') {
        $erros[] = "Selecione a espécie do seu animal";
    }

    if ($nome_tutor < 4 || $nome_tutor > 80) {
        $erros[] = "O nome do tutor ou é muito curto ou é muito longo";
    }


}
