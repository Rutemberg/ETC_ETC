
$(document).ready(function () {
    var div = document.getElementById('Diag');

    var Get = window.location.search.substring(1);
    var Evento = Get.split("=")[1];


//DIalogo principal
    if (typeof Evento == "undefined") {
        setTimeout(function () {
            $('.Site_corpo').foggy({
                blurRadius: 10, // In pixels.
                opacity: 1, // Falls back to a filter for IE.
                cssFilterSupport: true  // Use "-webkit-filter" where available.
            });
            $('.cadastro_concluido_back').velocity('transition.fadeIn', 500);
            $('.romobot').velocity('transition.fadeOut', 500);

            typedconcluido = new Typed('.robot_diag', {
                strings: ['', 'Olá, seja muito <strong>bem vindo!</strong>',
                    'Eu me chamo <strong>RobotBoy</strong>',
                    'Estarei aqui para ser seu guia e irei auxilia-lo para que fique por dentro de tudo! ;)',
                    'Muitas novidades estão a sua espera!',
                    'O evento contará com diversas atividades!',
                    'Dentre essas atividades temos o <strong>SUMOBOT</strong>',
                    'O SUMOBOT é um esporte em que dois robôs tentam empurrar um ao outro para fora de um círculo',
                    'Bem parecido com o esporte praticado entre vocês humanos não acha?',
                    'Se você tem uma equipe e um robô, porque não participam?',
                    'Venham mostrar suas habilidades e desafiar outras equipes!',
                    '<strong>AS INCRIÇÕES JÁ ESTÃO ABERTAS!<strong>',
                    'Para obter mais informações clique na opção <strong>Sumobot</strong> que está localizada no menu a sua esquerda.'
                ],
                typeSpeed: 30,
                backSpeed: 30,
                backDelay: 1000,
                cursorChar: ' ',
                fadeOut: true,
                loop: false
            });


        }, 1500);

        setTimeout(function () {
            $('.romobot').velocity('transition.fadeIn', 500);
            $('.Site_corpo').foggy(false);
            $('.cadastro_concluido_back').velocity('transition.fadeOut', 500);
        }, 50000);

        $('.cadastro_concluido_back').click(function () {
            $('.romobot').velocity('transition.fadeIn', 500);
            $('.Site_corpo').foggy(false);
            $('.cadastro_concluido_back').velocity('transition.fadeOut', 500);

        })

        setTimeout(function () {
            typed = new Typed('#Diag_romobot', {
                strings: ['', 'Olá, seja muito <strong>bem vindo!</strong>',
                    'Eu me chamo <strong>RobotBoy</strong>',
                    'Estarei aqui para ser seu guia e irei auxilia-lo para que fique por dentro de tudo! ;)',
                    'Muitas novidades estão a sua espera!',
                    'O evento contará com diversas atividades!',
                    'Dentre essas atividades temos o <strong>SUMOBOT</strong>',
                    'O SUMOBOT é um esporte em que dois robôs tentam empurrar um ao outro para fora de um círculo',
                    'Bem parecido com o esporte praticado entre vocês humanos não acha?',
                    'Se você tem uma equipe e um robô, porque não participam?',
                    'Venham mostrar suas habilidades e desafiar outras equipes!',
                    '<strong>AS INCRIÇÕES JÁ ESTÃO ABERTAS!<strong>',
                    'Para obter mais informações clique na opção <strong>Sumobot</strong> que está localizada no menu a sua esquerda.'
                ],
                typeSpeed: 30,
                backSpeed: 30,
                backDelay: 1000,
                cursorChar: ' ',
                fadeOut: true,
                loop: false
            });


        }, 1500);

        $('.Diag').click(function () {
            typed.reset();
        });
    }
//DIalogo principal



    else {


        switch (Evento) {

//            SUMOBOT
            case "SumoDeRobo":
                typed1 = new Typed('#Diag_romobot', {
                    strings: ['', 'Bem vindo ao <strong>SUMOBOT</strong>'
                                , 'Clique no botão <strong>Ver mais</strong> para obter mais informações a respeito do evento em foco'
                    ],
                    typeSpeed: 30,
                    cursorChar: ' ',
                    fadeOut: true,
                    loop: false
                });

                $('.Botao_Ver_Mais_click').click(function () {
                    typed1.destroy();
                    typed2 = new Typed('#Diag_romobot', {
                        strings: ['', 'A direita no topo temos as informações a respeito do local e horário de inicio e término respectivamente'
                                    , '<strong>Você pode clicar no icone da atividade ou no botão para obter mais detalhes a respeito</strong>'

                        ],
                        typeSpeed: 30,
                        cursorChar: ' ',
                        fadeOut: true,
                        loop: false
                    });

                });
                $('.Atividades_itens_item, .scrollveratividades').click(function () {
                    typed2.destroy();
                    typed3 = new Typed('#Diag_romobot', {
                        strings: ['', 'Vc tem uma equipe?',
                            'Faça o cadastro e venha se divertir!', 'Para fazer clique no botão de <strong>INCREVA-SE</strong> e siga as etapas'],
                        typeSpeed: 30,

                        cursorChar: ' ',
                        fadeOut: true,
                        loop: false
                    });
                    typed2.destroy();
                    $('.scrollveratividadesFim').click(function () {
                        typed3.destroy();
                        typed2 = new Typed('#Diag_romobot', {
                            strings: ['', 'A direita no topo temos as informações a repeito do local e horário de inicio e término respectivamente'
                                        , '<strong>Você pode clicar no icone da atividade ou no botão para obter mais detalhes a respeito</strong>'
                            ],
                            typeSpeed: 30,
                            cursorChar: ' ',
                            fadeOut: true,
                            loop: false
                        });
                        typed3.destroy();
                    });
                });

                $('.Botao_cadastro').click(function () {
                    document.getElementById("CorpoCadastro").style.display = "block";
                    typed4 = new Typed('#Diag_romobot', {
                        strings: ['', 'Preencha com os dados corretamente e espere pela confirmação.'
                                    , 'Nossa equipe entrará em contato com vc de acordo com os dados preenchidos'
                        ],
                        typeSpeed: 30,
                        cursorChar: ' ',
                        fadeOut: true,
                        loop: false
                    });
                    typed3.destroy();
                    typed2.destroy();
                    $('.Seta_voltar').click(function () {

                        typed11.destroy();
                        typed10.destroy();
                        typed9.destroy();
                        typed8.destroy();
                        typed7.destroy();
                        typed6.destroy();
                        typed5.destroy();
                        typed4.destroy();
                        typed1 = new Typed('#Diag_romobot', {
                            strings: ['', 'Bem vindo ao <strong>SUMOBOT</strong>'
                                        , 'Clique no botão <strong>Ver mais</strong> para obter mais informações a respeito do evento em foco'
                            ],
                            typeSpeed: 30,
                            cursorChar: ' ',
                            fadeOut: true,
                            loop: false
                        });

                    });
                });

                $('.Seta_voltar').click(function () {
                    setTimeout(function () {
                        document.getElementById("CorpoCadastro").style.display = "none";
                    }, 1500);
                    var animationSequence2 = [
                        {e: $(".Atividades_itens_item_sobre"), p: {top: "100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
                    $.Velocity.RunSequence(animationSequence2);
                    var animationSequence1 = [
                        {e: $(".CorpoCadastro"), p: {left: "100%"}, o: {delay: 1500, duration: 1000, easing: "easeInOutQuart"}}];
                    $.Velocity.RunSequence(animationSequence1);
                    var animationSequence = [
                        {e: $(".Atividades_itens_item_sobre_corpo"), p: {left: 0}, o: {delay: 1500, duration: 1000, easing: "easeInOutQuart"}}];
                    $.Velocity.RunSequence(animationSequence);

                    typed1 = new Typed('#Diag_romobot', {
                        strings: ['', 'Bem vindo ao <strong>SUMOBOT</strong>'
                                    , 'Clique no botão <strong>Ver mais</strong> para obter mais informações a respeito do evento em foco'
                        ],
                        typeSpeed: 30,
                        cursorChar: ' ',
                        fadeOut: true,
                        loop: false
                    });
                    typed2.destroy();
                    typed3.destroy();
                    typed4.destroy();
                    typed5.destroy();
                    typed6.destroy();
                    typed7.destroy();
                    typed8.destroy();
                    typed9.destroy();
                    typed10.destroy();
                    typed11.destroy();


                });


                break;
//            SUMOBOT



            default:

                break;
        }
    }












});
//DIalogo principal































//$(document).ready(function () {
//    var div = document.getElementById('Diag');
//
//    var Get = window.location.search.substring(1);
//    var Evento = Get.split("=")[1];
//
//
//    if (typeof Evento == "undefined") {
//        var textos = ['Seja muito bem vindo!',
//            'Esse evento vai ser muito divertido!',
//            'Temos uma variedade de atividades muito legais',
//            'Dentre elas o SUMOBOT',
//            'O SUMOBOT é um esporte em que dois robôs tentam empurrar um ao outro para fora de um círculo',
//            'Bem parecido com o esporte dos humanos não acha?',
//            'Se você tem uma equipe porque não participa?',
//            'Venham mostrar suas habilidades e desafiar outras equipes!',
//            'AS INCRIÇÕES JÁ ESTÃO ABERTAS!',
//            'Corre que dá tempo!'
//        ];

//    $('.Botao_Ver_Mais_click').click(function () {
//        var textos = [''];
//        $('.Diag').velocity('transition.fadeOut', {stagger: 100});
//    })
//    $('.Seta_voltar').click(function () {
//        var textos = ['Seja muito bem vindo!',
//            'Esse evento vai ser muito divertido!',
//            'Temos uma variedade de atividades muito legais',
//            'Dentre elas o SUMOBOT',
//            'O SUMOBOT é um esporte em que dois robôs tentam empurrar um ao outro para fora de um círculo',
//            'Bem parecido com o esporte dos humanos não acha?',
//            'Se você tem uma equipe porque não participa?',
//            'Venham mostrar suas habilidades e desafiar outras equipes!',
//            'AS INCRIÇÕES JÁ ESTÃO ABERTAS!',
//            'Corre que dá tempo!'
//        ];
//        $('.Diag').delay(1000).velocity('transition.fadeIn', {stagger: 100});
//    })
//}







//    function escrever(str, done) {
//        var char = str.split('').reverse();
//        var typer = setInterval(function () {
//            if (!char.length) {
//                clearInterval(typer);
//                return setTimeout(done, 3000); // só para esperar um bocadinho
//            }
//            var next = char.pop();
//            div.innerHTML += next;
//        }, 50);
//    }
//
//    function rodape(conteudos, el) {
//        var atual = -1;
//        function prox() {
//            if (atual < conteudos.length - 1)
//                atual++;
//            else
//                atual = 0;
//            var str = conteudos[atual];
//            escrever(str, function () {
//                div.innerHTML = '';
//                prox();
//            });
//        }
//        prox();
//    }
//    rodape(textos);
//
//});