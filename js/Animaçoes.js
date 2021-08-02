
$(document).ready(function () {
    $('.empresas').delay(500).velocity('transition.fadeIn', 300);
    $('.empresas img, .realizado').delay(200).velocity('transition.fadeIn', {stagger: 100});
    $('.Logo_Carregamento').delay(100).velocity('transition.fadeIn', 500);
    $('.Logo_Carregamento').delay(1000).velocity('transition.fadeOut', 500);

    setTimeout(function () {

        var animationSequence = [
            {e: $(".background_Evento_Corpo .Evento_Corpo"), p: {left: [0]}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
//    $('.background').velocity('transition.fadeIn', 500);
        var animationSequence1 = [
            {e: $(".countdown_corpo"), p: {top: [0]}, o: {delay: 300, duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence1);
        var animationSequence2 = [
            {e: $(".countdown_Text"), p: {left: [0]}, o: {delay: 1000, duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence2);
    }, 1500);


});

//botao scroll
$(document).ready(function () {
    $(document).ready(function () {

        $(".scrollCardsInicio img").velocity({marginBottom: "20px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");
        $(".scrollCardsFim img").velocity({marginBottom: "20px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");
        $(".scrollDownloadInicio img").velocity({marginBottom: "20px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");
        $(".scrollDownloadFim img").velocity({marginBottom: "20px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");

    });

//    responsive java
//    
//    if (screen.width < 1599 && screen.width > 1365) {
//    $(document).ready(function () {
//        $(".scrollCards").velocity({top: "445px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");
//    });
//    }

});
//clique botao scrool
$(document).ready(function () {
    $('.scrollCardsInicio').click(function () {
        $('#corpo_Cards').animate({scrollTop: $('#corpo_Cards')[0].scrollHeight}, 1500);
        $('.scrollCardsInicio').velocity('transition.slideDownOut', 500);
    })
    $('.scrollCardsFim').click(function () {
        $('#corpo_Cards').animate({scrollTop: 0}, 800);
        $('.scrollCardsInicio').velocity('transition.slideUpIn', 500);
    })
    $('.scrollDownloadInicio, .Atividades_itens_item').click(function () {
        $('.corpo_Cards').animate({scrollTop: $('.corpo_Cards')[0].scrollHeight}, 1500);
        $('.scrollDownloadInicio').velocity('transition.slideDownOut', 500);
    })
    $('.scrollDownloadFim').click(function () {
        $('.corpo_Cards').animate({scrollTop: 0}, 800);
        $('.scrollDownloadInicio').velocity('transition.slideUpIn', 500);
    })

//    ATIVIDADES
    $('.scrollveratividades, .Atividades_itens_item').click(function () {
        var animationSequence2 = [
            {e: $(".Atividades_itens_item_sobre"), p: {top: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence2);
    })
    $('.scrollveratividadesFim').click(function () {
        var animationSequence2 = [
            {e: $(".Atividades_itens_item_sobre"), p: {top: "100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence2);
    })
//    ATIVIDADES
});




////efeito zoom
//$(document).ready(function () {
//    $(".backgroundCorpo").velocity({scale: "120%"}, {delay: 2000, duration: 9000, easing: "easeOutQuad", loop: true}).velocity("reverse");
//});
//Retornar
function retornar() {
    $('.Diag').velocity('transition.fadeOut', 200);
    $('.empresas img, .realizado').velocity('transition.fadeOut', {stagger: 100});
    var animationSequence1 = [
        {e: $(".countdown_corpo"), p: {top: ["-105px"]}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
    var animationSequence = [
        {e: $(".Corpo"), p: {left: "100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    $('.background').velocity('transition.fadeOut', 500);
    setTimeout(function () {
        history.go(-1);
    }, 1500);
}

//Click Seguir
function seguir() {
    $('.Diag').velocity('transition.fadeOut', 200);
    $('.empresas img, .realizado').velocity('transition.fadeOut', {stagger: 100});
    var animationSequence1 = [
        {e: $(".countdown_corpo"), p: {top: ["-105px"]}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
    var animationSequence = [
        {e: $(".Corpo"), p: {left: "100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    $('.background').velocity('transition.fadeOut', 500);
//    var url_atual = window.location.href;
    var Get = window.location.search.substring(1);
    var Valor = Get.split("=")[1];
    setTimeout(function () {
        if (typeof Valor == "undefined") {
            window.location.href = "index.php?Evento=Palestras";
        } else {
            switch (Valor) {
                case "Palestras":
                    window.location.href = "index.php?Evento=Talkshows";
                    break;
                case "Talkshows":
                    window.location.href = "index.php?Evento=Oficinas";
                    break;
                case "Oficinas":
                    window.location.href = "index.php?Evento=AcaoSocial";
                    break;
                case "AcaoSocial":
                    window.location.href = "index.php?Evento=OpenArena";
                    break;
                case "OpenArena":
                    window.location.href = "index.php?Evento=SumoDeRobo";
                    break;
                case "SumoDeRobo":
                    window.location.href = "index.php?Evento=SeguidorDeLinha";
                    break;
                case "SeguidorDeLinha":
                    window.location.href = "index.php?Evento=Parceiros";
                    break;
                default:

                    break;
            }
        }
    }, 1500);
}

//Clique ver mais EVENTO
function Vermais() {
//    $('.Diag').velocity('transition.fadeOut', 200);
    document.getElementById("Seta_Esquerda").style.display = "none";
    document.getElementById("Seta_Esquerda_back").style.display = "block";
    setTimeout(function () {
        document.getElementById("Seta_voltar").style.display = "block";
        document.getElementById("Seta_Esquerda_back").style.display = "none";
    }, 2000);
    var animationSequence3 = [
        {e: $(".countdown_corpo"), p: {top: ["-105px"]}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence3);
    var animationSequence2 = [
        {e: $(".Seta_Direita img"), p: {right: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence2);
    $('.Seta_Direita').delay(1000).velocity('transition.fadeOut', 500);
    var animationSequence = [
        {e: $(".Corpo"), p: {translateX: ["-100%"]}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    var animationSequence1 = [
        {e: $(".Corpo_Informacoes"), p: {left: "-100%"}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
}

//Clique voltar para tela do Evento
function Voltar() {

//    $('.Diag').delay(1000).velocity('transition.fadeIn', 200);
    document.getElementById("Seta_voltar").style.display = "none";
    document.getElementById("Seta_Esquerda_back").style.display = "block";

    setTimeout(function () {
        document.getElementById("Seta_Esquerda").style.display = "block";
        document.getElementById("Seta_Esquerda_back").style.display = "none";
    }, 2000);
    var animationSequence3 = [
        {e: $(".countdown_corpo"), p: {top: [0]}, o: {delay: 1000, duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence3);
    $('.Seta_Direita').velocity('transition.fadeIn', 500);
    var animationSequence2 = [
        {e: $(".Seta_Direita img"), p: {right: 0}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence2);
    var animationSequence1 = [
        {e: $(".Corpo_Informacoes"), p: {left: 0}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
    var animationSequence = [
        {e: $(".Corpo"), p: {translateX: 0}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
}

//CLique card palestrante
function VerPalestrante() {

    document.getElementById("Seta_voltar").style.display = "none";
    document.getElementById("Seta_Esquerda_back").style.display = "block";

    setTimeout(function () {
        document.getElementById("Seta_voltar_palestrantes").style.display = "block";
        document.getElementById("Seta_Esquerda_back").style.display = "none";

    }, 2000);
    var animationSequence = [
        {e: $(".Corpo_Informacoes"), p: {top: "-100%"}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    var animationSequence1 = [
        {e: $(".Corpo_Informacoes_Palestrante"), p: {top: "-100%"}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
}

//clique seta voltar Para Cards
function VoltarPalestrante() {
    document.getElementById("Seta_voltar_palestrantes").style.display = "none";
    document.getElementById("Seta_Esquerda_back").style.display = "block";

    setTimeout(function () {
        document.getElementById("Seta_voltar").style.display = "block";
        document.getElementById("Seta_Esquerda_back").style.display = "none";

    }, 2000);
    var animationSequence1 = [
        {e: $(".Corpo_Informacoes_Palestrante"), p: {top: 0}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
    var animationSequence1 = [
        {e: $(".Corpo_Informacoes"), p: {top: 0}, o: {delay: 300, duration: 1500, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
}

//Animaçao pos clique link

function Linksaidaclique(href) {
    $('.Diag').velocity('transition.fadeOut', 200);
    $('.empresas img, .realizado').velocity('transition.fadeOut', {stagger: 100});
    var animationSequence1 = [
        {e: $(".countdown_corpo"), p: {top: ["-105px"]}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);
    var animationSequence = [
        {e: $(".Evento_Corpo"), p: {left: "100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    $('.background').velocity('transition.fadeOut', 500);
    setTimeout(function () {
        window.location.href = href;
    }, 1500);
}



function Linkinscrevase() {
    var animationSequence = [
        {e: $(".Atividades_itens_item_sobre_corpo"), p: {left: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence);
    var animationSequence1 = [
        {e: $(".CorpoCadastro"), p: {left: 0}, o: {duration: 1000, easing: "easeInOutQuart"}}];
    $.Velocity.RunSequence(animationSequence1);



    $('.Seta_voltar').click(function () {

        $(".nomedaequipe").focus();
        document.getElementById('participante').value = "";
        document.getElementById('nomedaequipe').value = "";
        document.getElementById('nomedorobo').value = "";
        document.getElementById('nomedolider').value = "";
        document.getElementById('emaildolider').value = "";
        document.getElementById('fonedolider').value = "";



    });


}


