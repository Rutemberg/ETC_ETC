<?php
function Evento($titulo1, $titulo2, $Imagem) {
?>

<!--    SETAS-->
<nav class="Seta_voltar" id="Seta_voltar" >
    <a onclick="Voltar();"><img src="Imagem/Icones/Seguir.png"></a>
</nav>
<nav class="Seta_voltar_palestrantes" id="Seta_voltar_palestrantes" >
    <a onclick="VoltarPalestrante();"><img src="Imagem/Icones/Seguir.png"></a>
</nav>
<!--    SETAS-->


<!--CORPO CONTEUDO INTEIRO-->
<div class="background_Evento_Corpo">
    <div class="Logo_Carregamento"></div>
    <div class="Evento_Corpo" id="Evento_Corpo">

        <!--        CONTEUDO HOME-->
        <section class="Corpo">
            <div class="Corpo_Titulo_Background">
            </div>
            <div class="Corpo_Titulo">
                <div class="Titulos">
                    <h1 class="Titulo1"><?php echo "{$titulo1}"; ?></h1>
                    <h2 class="Titulo2"><?php echo "{$titulo2}"; ?></h2>
                    <?php
                    if (empty($_GET)){
                    ?>
                    <div class="Botao_Ver_Mais"><a onclick="Linksaidaclique('?Evento=Palestras');"><button>Começar</button></a></div>
                    <?php
                    } else{
                    if($_GET["Evento"] != "Parceiros"){
                    ?>
                    <div class="Botao_Ver_Mais"><button class="Botao_Ver_Mais_click" onclick="Vermais();">Ver mais</button></div>
                    <?php }}
                    ?>
                </div>
            </div>
            <div class="Corpo_Imagem" 
                 style="background: url('<?php echo "Imagem/BGEventos/{$Imagem}"; ?>') no-repeat center;        
                 -webkit-background-size: 100% 100%;
                 -moz-background-size: 100% 100%;
                 -o-background-size: 100% 100%;
                 background-size: 100% 100%; ">
            </div>
        </section>
        <!--        CONTEUDO HOME-->

        <!--CONTEUDO INFORMAÇOES DO EVENTO SELECIONADO-->
        <section class="Corpo_Informacoes">
            <div class="Corpo_Titulo_Background_informacoes">
            </div>
            <!--CONTEUDO INFORMAÇOES DO EVENTO (TITULO)-->
            <div class="Corpo_Titulo Corpo_Titulo_Informacoes">
                <div class="Titulos Titulos_Informacoes">
                    <h1 class="Titulo1 Titulo1_informacoes">
                        <?php
                        if (!empty($_GET) && ($_GET["Evento"] == "Palestras")):
                        echo "Palestrantes";
                        else:
                        echo "{$titulo1}";
                        endif;
                        ?></h1>
                    <h1 class="Titulo2 Titulo2_informacoes">
                        <?php
                        echo "{$titulo2}";
                        ?></h1>
                </div>
            </div>
            <!--CONTEUDO INFORMAÇOES DO EVENTO (TITULO)-->

            <!--CONTEUDO INFORMAÇOES DO EVENTO (CONTEUDO)-->
            <div class="Informacoes">

                <!--CONTEUDO INFORMAÇOES DO EVENTO (PALESTRANTES(CARDS))-->
                <div class="corpo_Cards" id="corpo_Cards">
                    <?php
                    if (!empty($_GET) && ($_GET["Evento"] == "Palestras" || $_GET["Evento"] == "Talkshows")) {

                    require_once 'Modelo/DAO/classePalestranteDAO.php';
                    $Evento = $_GET["Evento"];
                    $novoPalestranteDAO = new classePalestranteDAO();
                    $palestrantes = $novoPalestranteDAO->listarPalestrante($Evento);
                    $quantidadePalestrantes = count($palestrantes);

                    if (isset($palestrantes)) {
                    foreach ($palestrantes as $palestrante) {
                    ?>

                    <a onclick="VerPalestrante()" onmouseup="pesquisa(<?php echo $palestrante->idPalestrante; ?>)">
                        <div class="Card_palestrante">
                            <div class="Card_palestrante_Imagem" style="        
                                 background: url('<?php echo "Imagem/IMGPalestrante/{$palestrante->urlFotoPalestrante}"; ?>') no-repeat center;
                                 -webkit-background-size: cover;
                                 -moz-background-size: cover;
                                 -o-background-size: cover;
                                 background-size: cover;"></div>

                            <div class="Card_palestrante_Informaçoes">

                                <p style="font-family: 'Roboto-Bold';margin-top: 10px;">
                                    <img src="Imagem/Icones/Clock.png">
                                    <?php
                                    $inicio = $palestrante->inicio = strftime('%H:%M', strtotime($palestrante->inicio));
                                    $Termino = $palestrante->termino = strftime('%H:%M', strtotime($palestrante->termino));
                                    echo "{$inicio}"
                                    . " às " . "$Termino";
                                    ?>
                                </p>
                                <p style="margin-top: 10px;font-size: 15px;"><img src="Imagem/Icones/Local.png"><?php echo $palestrante->localPalestrante; ?></p>

                                <p class="nomePalestrante"><?php echo $palestrante->nomePalestrante; ?></p>
                            </div>
                            <div class="Card_palestrante_Tema"><?php echo $palestrante->temaPalestra; ?></div>
                        </div>
                    </a>


                    <?php
                    }
                    }
                    ?>
                    <?php if (!empty($quantidadePalestrantes) && $quantidadePalestrantes > 4) { ?>
                    <span class="scrollCardsInicio">
                        <img src="Imagem/Icones/Rolar.png">    
                    </span>
                    <span class="scrollCardsFim">
                        <img src="Imagem/Icones/Subir.png">    
                    </span>
                    <?php } ?>
                </div>
                <?php } else {
                ?>
                <!--CONTEUDO INFORMAÇOES DO EVENTO (PALESTRANTES(CARDS))-->


                <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(BANCO DE DADOS))-->
                <div class="Informacoes_evento" id="Informacoes_evento">

                    <?php
                    $nomeEvento = $_GET['Evento'];
                    require_once 'Modelo/DAO/classeEventoDAO.php';

                    $novoEventoDAO = new classeEventoDAO();
                    $eventos = $novoEventoDAO->pesquisarEventoPorNome($nomeEvento);
                    $quantidadeEventos = count($eventos);

                    if ($quantidadeEventos > 0) {
                    foreach ($eventos as $evento) {
                    ?>

                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(CABEÇALHO))-->
                    <header class="Informacoes_evento_cabecalho">
                        <div class="Localizacao">
                            <img src="Imagem/Icones/Local.png">
                            <?php echo "{$evento->localizacao}"; ?>
                        </div>
                        <div class="Horario">
                            <img src="Imagem/Icones/Clock.png">
                            <?php
                            $inicio = $evento->inicio = strftime('%H:%M', strtotime($evento->inicio));
                            $Termino = $evento->termino = strftime('%H:%M', strtotime($evento->termino));
                            echo "{$inicio}"
                            . " às " . "$Termino";
                            ?>
                        </div>

                    </header>
                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(CABEÇALHO))-->

                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(ATIVIDADES))-->
                    <article class="atividades">
                        <header class="titulo_sobre_atividades">Atividades</header>
                        <ul class="Atividades_itens">
                            <?php
                            require_once 'Atividades.php';
                            if ($nomeEvento == "AcaoSocial") {
                            $novaAtividade = new Atividades();
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Corte de Cabelo", "Tesoura.png");
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Controle de Pressão", "Pressao.png");
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Auto Maquiagem (Trazer a sua)", "Maquiagem.png");
                            echo $Atividade;
                            }
                            if ($nomeEvento == "SeguidorDeLinha") {
                            $novaAtividade = new Atividades();
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Desafio de Seguidor de Linha", "Robo.png");
                            echo $Atividade;
                            }
                            if ($nomeEvento == "SumoDeRobo") {
                            $novaAtividade = new Atividades();
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Sumô de robô", "Sumobot.png");
                            echo $Atividade;
                            }
                            if ($nomeEvento == "OpenArena") {
                            $novaAtividade = new Atividades();
                            $Atividade = $novaAtividade->adicionarAtividades("{$nomeEvento}", "Open Arena", "OpenArena.png");
                            echo $Atividade;
                            }
                            ?>
                        </ul>
                    </article>
                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(ATIVIDADES))-->

                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(SOBRE))-->
                    <!--                                    <article class="sobre">
                                                            <header class="titulo_sobre_atividades">Sobre</header>
                    <?php echo "{$evento->conteudo}"; ?>
                                                        </article>-->
                    <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(SOBRE))-->



                    <?php
                    }
                    } else {
                    ?>
                    <div class="emDesenvolvimento">em construção</div>
                    <?php }
                    ?>
                </div>
                <!--CONTEUDO INFORMAÇOES DO EVENTO (EVENTO(BANCO DE DADOS))-->
                <?php }
                ?>
            </div>
            <!--CONTEUDO INFORMAÇOES DO EVENTO (CONTEUDO)-->

        </section>
        <!--CONTEUDO INFORMAÇOES DO EVENTO SELECIONADO-->

        <!--CONTEUDO INFORMAÇOES DO PALESTRANTE (AJAX)-->

        <?php if (!empty($_GET) && ($_GET["Evento"] == "Palestras" || $_GET["Evento"] == "Talkshows")): ?>
        <section class="Corpo_Informacoes_Palestrante" id="Corpo_Informacoes_Palestrante">

        </section>
        <?php endif; ?>

        <!--CONTEUDO INFORMAÇOES DO PALESTRANTE (AJAX)-->

    </div>
</div>
<!--CORPO CONTEUDO INTEIRO-->
<?php
}
?>