<?php 

    require 'processa_agendar.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agendar Consulta </title>
</head>

<body>

    <form action="agendar.php" method="POST">

        <input type="text" name="nome_pet" placeholder="Nome do Pet" required>

        <select name="especie" id="especie" required>

            <option value="cao">Cão</option>
            <option value="gato">Gato</option>
            <option value="ave">Ave</option>
            <option value="roedor">Roedor</option>
            <option value="reptil">Réptil</option>
            <option value="outro">Outro</option>

        </select>

        <input type="text" name="nome_tutor" placeholder="Nome do Tutor" required>

        <input type="text" name="telefone" placeholder="(00) 00000-0000" required>

        <input type="email" name="email" placeholder="seuemail@email.com" required>

        <input type="date" name="data_consulta" required>

        <select name="horario" id="horario" required>



        </select>

        <input type="number" name="valor_consulta" placeholder="R$ 000,00" required>

        <button>Agendar Consulta</button>

    </form>

</body>

</html>