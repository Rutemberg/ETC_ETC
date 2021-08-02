<?php

if (!empty($_POST)) {


    $nomeParticipante = $_POST['nomedolider'];
    $emailParticipante = $_POST['emaildolider'];
    $foneParticipante = $_POST['fonedolider'];
    $nomeEquipe = $_POST['nomedaequipe'];
    $nomeRobo = $_POST['nomedorobo'];

    require_once '../../Modelo/Classes/classeParticipante.php';
    require_once '../../Modelo/DAO/classeParticipanteDAO.php';

    $novoParticipante = new classeParticipante();

    $novoParticipante->setNomeParticipante($nomeParticipante);
    $novoParticipante->setEmailParticipante($emailParticipante);
    $novoParticipante->setFoneParticipante($foneParticipante);
    $novoParticipante->setNomeEquipe($nomeEquipe);
    $novoParticipante->setNomeRobo($nomeRobo);


    $novoParticipanteDAO = new classeParticipanteDAO();
    $cadastrar = $novoParticipanteDAO->cadastrarParticipante($novoParticipante);

    foreach ($_POST['valor'] as $item) {
        // Aqui você poderia inserir os items no banco de dados
        if ($item['participante'] != "") {
            $nomeMembro = $item['participante'];
            $equipeMembro = $nomeEquipe;
            $cadastrarmembro = $novoParticipanteDAO->cadastrarMembro($nomeMembro, $equipeMembro);
        } else {
            $cadastrar = FALSE;
        }
    }

    if ($cadastrar == FALSE) {
        session_start();
        $_SESSION['mensagemcadastroConluido'] = 2;
        echo "<script>
                        window.location.href='../../index.php?Evento=SumoDeRobo';
                        </script>";
    } else {
        session_start();
        $_SESSION['mensagemcadastroConluido'] = 1;
        echo "<script>
                        window.location.href='../../index.php?Evento=SumoDeRobo';
                        </script>";
    }

    // Lê cada um dos items que está no array $_POST['valor']
}
?>