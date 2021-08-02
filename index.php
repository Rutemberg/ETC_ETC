<?php
session_start();



include_once 'Modelo/Conteudo.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Evento tecnológico de ceilândia</title>
        <!--        Estilos-->
        <link rel="stylesheet" href="css/Home_style.css">
        <link rel="stylesheet" href="css/List_style.css">
        <link rel="stylesheet" href="css/Cadastro.css">
        <link rel="stylesheet" href="js/Minimalist-Countdown-Timer-Plugin-jQuery/css/countdown.css">
        <link rel="shortcut icon" href="Imagem/Icones/etc_icon.ico" type="image/x-icon">
        <link rel="icon" href="Imagem/Icones/etc_icon.ico" type="image/x-icon">

        <!--        Java-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/velocity.min.js"></script>
        <script src="js/velocity.ui.js"></script>
        <script src="js/Animaçoes.js"></script>
        <script src="js/Dialogos.js"></script>
        <script src="js/script.js"></script>
        <script src="js/Cadastro.js"></script>
        <script src="js/jquery.foggy.min.js"></script>
        <script src="js/typed.js-master/lib/typed.min.js"></script>
        <script src="js/Minimalist-Countdown-Timer-Plugin-jQuery/js/countdown.js"></script>
        <script src="js/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>

        <script>

            function pesquisa(valor)
            {
                //FUNÇÃO QUE MONTA A URL E CHAMA A FUNÇÃO AJAX
                url = "Controle/InformacoesPalestrante.php?valor=" + valor;
                ajax(url);
            }
            ;
        </script>
        <script language ="javascript">
            var Get = window.location.search.substring(1);
            var Evento = Get.split("=")[1];

            if (Evento == "SumoDeRobo") {
                mensagem = "<?php echo $_SESSION['mensagemcadastroConluido']; ?>";
                if (mensagem == 1 || mensagem == 2) {
                    if (mensagem == 1) {
                        "<?php $_SESSION['mensagemcadastroConluido'] ++; ?>";
                        $(document).ready(function () {
                            setTimeout(function () {
                                $('.Site_corpo').foggy({
                                    blurRadius: 10, // In pixels.
                                    opacity: 1, // Falls back to a filter for IE.
                                    cssFilterSupport: true  // Use "-webkit-filter" where available.
                                });
                                $('.cadastro_concluido_back').velocity('transition.fadeIn', 500);
                                $('.romobot').velocity('transition.fadeOut', 500);

                                typedconcluido = new Typed('.robot_diag', {
                                    strings: ['', 'Muito bem, seu cadastro foi efetuado com sucesso!',
                                        'Nossa equipe entrará em contato com vc brevemente para confirmação dos dados',
                                        'Obrigado por se inscrever e boa diversão!',
                                        'Enquanto isso visite nossos outros eventos e veja o que estamos preparando para vocês!',
                                        'Até mais ;)'
                                    ],
                                    typeSpeed: 30,
                                    backSpeed: 30,
                                    backDelay: 1500,
                                    cursorChar: ' ',
                                    fadeOut: true,
                                    loop: false
                                });


                            }, 500);
                            setTimeout(function () {
                                $('.romobot').velocity('transition.fadeIn', 500);
                                $('.Site_corpo').foggy(false);
                                $('.cadastro_concluido_back').velocity('transition.fadeOut', 500);
                            }, 24000);
                        });
                    }
                    if (mensagem == 2) {
                        "<?php $_SESSION['mensagemcadastroConluido'] ++; ?>";
                        $(document).ready(function () {
                            setTimeout(function () {
                                $('.Site_corpo').foggy({
                                    blurRadius: 10, // In pixels.
                                    opacity: 1, // Falls back to a filter for IE.
                                    cssFilterSupport: true  // Use "-webkit-filter" where available.
                                });
                                $('.cadastro_concluido_back').velocity('transition.fadeIn', 500);
                                $('.romobot').velocity('transition.fadeOut', 500);

                                typedconcluido = new Typed('.robot_diag', {
                                    strings: ['', 'Bem parece que algo deu errado!',
                                        'Isso não era pra estar acontecendo',
                                        'Você digitou seus dados coretamente mesmo?',
                                        'Uma mensagem a respeito deste erro será enviado ao administrador para que isso não ocorra mais ok?',
                                        'Tente se cadastrar mais uma vez e desculpe por isso'
                                    ],
                                    typeSpeed: 30,
                                    backSpeed: 30,
                                    backDelay: 1500,
                                    cursorChar: ' ',
                                    fadeOut: true,
                                    loop: false
                                });


                            }, 1000);
                            setTimeout(function () {
                                $('.romobot').velocity('transition.fadeIn', 500);
                                $('.Site_corpo').foggy(false);
                                $('.cadastro_concluido_back').velocity('transition.fadeOut', 500);
                            }, 24000);
                        });
                    }
                } else {
                    "<?php unset($_SESSION['mensagemcadastroConluido']); ?>"
                }
            }

        </script>





    </head>


    <div class="cadastro_concluido_back">

        <div class="cadastro_concluido_robot">
            <div class="cadastro_concluido">

                <div class="robot_img">
                    <img src="Gif/Romobot.gif">
                </div>
                <div class="robot_diag">
                </div>
            </div>
        </div>
    </div>


    <div class="Site_corpo">
        <header class="Logo">
            <a onclick="Linksaidaclique('index.php');"><img class="Logo_img" src="Imagem/Icones/LOGO.png"></a>
            <div class="romobot">
                <img class="romobot_img" src="Gif/Romobot.gif">
                <div class="CaixaDiag">
                    <div class="dialogos">
                        <div class="Diag" id="Diag_romobot">
                        </div>
                    </div>
                </div>
            </div>
            <div class='countdown_corpo'>
                <div class='countdown' data-date="2017-11-25"></div>
                <div class="countdown_Text">TERÁ INÍCIO EM:</div>
            </div>
        </header>


        <div class="resposive">
            <div class="resposiveItens">
                <h2>Em breve disponível para demais dispositivos</h2>
                <img src="Imagem/Icones/Dispositivos.png">
            </div>
        </div>

        <div class="all">


            <nav class="Menu">
                <ul class="Menu_Lista">
                    <a onclick="Linksaidaclique('?Evento=Palestras');"> <li class="Menu_Lista_item">Palestras</li></a>
                    <a onclick="Linksaidaclique('?Evento=Talkshows');"><li class="Menu_Lista_item">Talkshow</li></a>
                    <a onclick="Linksaidaclique('?Evento=Oficinas');"><li class="Menu_Lista_item">Oficinas</li></a>
                    <a onclick="Linksaidaclique('?Evento=AcaoSocial');"><li class="Menu_Lista_item">Ação social</li></a>
                    <a onclick="Linksaidaclique('?Evento=OpenArena');"><li class="Menu_Lista_item">Open arena</li></a>
                    <a onclick="Linksaidaclique('?Evento=SumoDeRobo');"><li class="Menu_Lista_item">Sumobot</li></a>
                    <a onclick="Linksaidaclique('?Evento=SeguidorDeLinha');"><li class="Menu_Lista_item">Seguidor De Linha</li></a>
                    <a onclick="Linksaidaclique('?Evento=Parceiros');"><li class="Menu_Lista_item">Parceiros</li></a>
                </ul>
                <>


            </nav>

            <?php if (!empty($_GET)): ?>
                <nav class="Seta_Esquerda" id="Seta_Esquerda">
                    <a onclick="retornar();"><img src="Imagem/Icones/Seguir.png"></a>
                </nav>
                <nav class="Seta_Esquerda_back" id="Seta_Esquerda_back">
                    <a><img src="Imagem/Icones/Seguir.png"></a>
                </nav>
            <?php endif; ?>

            <?php
            if (empty($_GET)):
                Evento("25 de NOV.", "Evento ETC&ETC", "Principal.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "Palestras"):
                Evento("Palestras", " ", "Palestra.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "Talkshows"):
                Evento("Talkshows", " ", "TalkShow.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "Oficinas"):
                Evento("Oficinas", " ", "Oficinas.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "AcaoSocial"):
                Evento("Ação Social", " ", "AcaoSocial.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "OpenArena"):
                Evento("Open Arena", " ", "OpenArena.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "SumoDeRobo"):
                Evento("Sumobot", " ", "Sumo.gif");
            endif;

            if (!empty($_GET) && $_GET["Evento"] == "SeguidorDeLinha"):
                Evento("Robô", "Seguidor de linha", "SeguidordeLinha.gif");
            endif;
            if (!empty($_GET) && $_GET["Evento"] == "Parceiros"):
                Evento("Seja um!", " ", "Parceiros.png");
            endif;
            ?>

            <?php if (empty($_GET) or $_GET["Evento"] != "Parceiros"): ?>
                <nav class="Seta_Direita">
                    <a onclick="seguir()"><img src="Imagem/Icones/Seguir.png"></a>
                </nav>
            <?php endif; ?>

            <footer class="Rodape">
                <div class="parceirias">
                    <h3 class="realizado">REALIZADO POR</h3>
                    <div class="empresas">
                        <a onclick="window.open('http://etcdf.com.br/')"><img src="Imagem/Parceiros/etc.gif" class="logoetcrodape"></a>
                        <a onclick="window.open('http://etcdf.com.br/')"><img src="Imagem/Icones/IconRobotica.png" class="logoetcrodape"></a>
                    </div>
                </div>


                <div class="Contactpag">

                    <img src="Imagem/Icones/facebook.png">
                    <img src="Imagem/Icones/instagram.png">       
                    <div class="emailetc">etceetcetera@gmail.com</div>
                </div>
                <div class="Desenvolvidopor">
                    <h1>Desenvolvido por:</h1>
                    <h2>Rutemberg</h2>
                    <h3>rutembergbarbosa@gmail.com</h3>
                </div>
            </footer>
        </div>
    </div>


</body>
</html>
