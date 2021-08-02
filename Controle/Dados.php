<?php

if (!empty($_POST)) {

    echo $_POST['nomedaequipe'];
    echo $_POST['nomedorobo'];
    echo $_POST['nomedolider'];
    echo $_POST['emaildolider'];
    echo $_POST['fonedolider'];


    // Lê cada um dos items que está no array $_POST['valor']
    foreach ($_POST['valor'] as $item) {
        // Aqui você poderia inserir os items no banco de dados
        if ($item['participante'] != "") {
            echo "Participante:</b> " . $item['participante'];
        } else {
            break;
        }
    }
}
?>