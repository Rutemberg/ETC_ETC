$(document).ready(function () {
    $('.fonedolider').mask('(00) 0000-00009');
    $('.nomedolider').mask('SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS', {'translation': {
            S: {pattern: /[A-Za-z]/}
        }
    });
});

$(document).ready(function () {

//Botao para passar etapas
    $(".cadastro_button").velocity({right: "20px"}, {duration: 1000, easing: "easeOutQuad", loop: true}).velocity("reverse");

    $('#cadastro_button').click(function () {
        var animationSequence = [
            {e: $(".etapa1"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });
    $('#cadastro_button2').click(function () {
        var animationSequence = [
            {e: $(".etapa2"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });
    $('#cadastro_button3').click(function () {
        var animationSequence = [
            {e: $(".etapa3"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });
    $('#cadastro_button4').click(function () {
        var animationSequence = [
            {e: $(".etapa4"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });
    $('#cadastro_button5').click(function () {
        var animationSequence = [
            {e: $(".etapa5"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });
    $('#cadastro_button6').click(function () {
        var animationSequence = [
            {e: $(".etapa6"), p: {marginLeft: "-100%"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });

//Botao para passar etapas
});
var index = 1;

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("botao_add").addEventListener('click', function () {
        // Sempre que alguem clicar no botão "botao_add" fazer:

        // Acrescenta mais um no index
        index++;
        if (index < 6) {

            // Gera uma nova div da classe item
            let novaDiv = document.createElement('div');
            novaDiv.setAttribute('class', 'item_participante');

            // Os campos com o novo index
            let novoItem =
                    '<input type="text" name="valor[' + index + '][participante]" placeholder="' + index + '° membro"> ';
            novaDiv.innerHTML = novoItem;

            // Adiciona o novo item na div "formulario" (mantendo o que já está lá)
            document.getElementById("Itens_participantes").appendChild(novaDiv);
        }
    });
});







function is_email(email) {
    er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/;
    if (!er.exec(email))
    {
        return false;

    }
}


function ValidaFormulario() {


    if (document.getElementById('nomedaequipe').value == "") {
        $(".nomedaequipe").focus();
        return false;

    }
    if (document.getElementById('nomedorobo').value == "") {
        $(".nomedorobo").focus();
        return false;


    }
    if (document.getElementById('nomedolider').value == "") {
        $(".nomedolider").focus();
        return false;


    }
    var email = document.getElementById('emaildolider').value;
    if (document.getElementById('emaildolider').value == "" || is_email(email) == false) {
        $(".emaildolider").focus();
        return false;


    }
    if (document.getElementById('fonedolider').value == "") {
        $(".fonedolider").focus();
        return false;

    }
    var valor = document.getElementById('participante').value;
    if (valor == "") {
        $("#etapa6participante").focus();
        return false;

    }
    if (document.formulario.regulamento.checked == false) {
        $("#downloadRegulamento").focus();
        return false;
    }


    return true;

}


//SETAS PARA PROSSEGUIR
function botaoaparece() {

    if (document.formulario.nomedaequipe.value != "") {
        document.getElementById("cadastro_button").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button").style.display = "none";
    }

}
function botaoaparece2() {

    if (document.formulario.nomedorobo.value != "") {
        document.getElementById("cadastro_button2").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button2").style.display = "none";
    }

}
function botaoaparece3() {

    if (document.formulario.nomedolider.value != "") {
        document.getElementById("cadastro_button3").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button3").style.display = "none";
    }

}
function botaoaparece4() {
    var email = document.formulario.emaildolider.value;
    if (document.formulario.emaildolider.value != "" && is_email(email) != false) {
        document.getElementById("cadastro_button4").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button4").style.display = "none";
    }

}
function botaoaparece5() {

    if (document.formulario.fonedolider.value != "") {
        document.getElementById("cadastro_button5").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button5").style.display = "none";
    }

}
function botaoaparece6() {
    var valor = document.getElementById('participante').value;
    if (valor != "") {
        document.getElementById("cadastro_button6").style.display = "block";
    } else
    {
        document.getElementById("cadastro_button6").style.display = "none";
    }

}
//SETAS PARA PROSSEGUIR


//Dialogos onfocus inputs

function dialog1() {


    typed4.destroy();
    typed5 = new Typed('#Diag_romobot', {
        strings: ['', 'Precisamos do nome da sua equipe',
        ],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });

}
function dialog2() {
    typed4.destroy();
    typed5.destroy();
    typed6 = new Typed('#Diag_romobot', {
        strings: ['', 'Qual o nome do robô?',
        ],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });

}

function dialog3() {
    typed4.destroy();
    typed5.destroy();
    typed6.destroy();
    typed7 = new Typed('#Diag_romobot', {
        strings: ['', 'Os campos devem ser preenchidos', 'insira seus dados corrretamente para que não haja erros ou enganos quando formos solicitar a confirmação dos mesmos'],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });
}
function dialog4() {
    typed4.destroy();
    typed5.destroy();
    typed6.destroy();
    typed7.destroy();
    typed8 = new Typed('#Diag_romobot', {
        strings: ['', 'Insira seu email corretamente'],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });
}
function dialog5() {
    typed4.destroy();
    typed5.destroy();
    typed6.destroy();
    typed7.destroy();
    typed8.destroy();
    typed9 = new Typed('#Diag_romobot', {
        strings: ['', 'Digite seu telefone com DDI'],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });


}
function dialog6() {
    typed4.destroy();
    typed5.destroy();
    typed6.destroy();
    typed7.destroy();
    typed8.destroy();
    typed9.destroy();
    typed10 = new Typed('#Diag_romobot', {
        strings: ['', 'Para adicionar um membro clique na figura ao lado da caixa!', 'Sua equipe terá que ter no minimo 2 membros incluindo você!'],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });


}
function dialog7() {
    typed4.destroy();
    typed5.destroy();
    typed6.destroy();
    typed7.destroy();
    typed8.destroy();
    typed9.destroy();
    typed10.destroy();
    typed11 = new Typed('#Diag_romobot', {
        strings: ['', 'Faça o <strong>DOWNLOAD</strong> do arquivo de regulamento do evento abaixo', 'Leia e entenda, após isso marque a caixa que aparecerá e finalize o cadastro!'],
        typeSpeed: 30,
        backSpeed: 30,
        cursorChar: ' ',
        fadeOut: true,
        loop: false
    });


}
//Dialogos onfocus inputs


$(document).ready(function () {

    $('.ImgRegulamento').click(function () {
        var animationSequence = [
            {e: $(".ChekedRegulamento"), p: {opacity: "1"}, o: {duration: 1000, easing: "easeInOutQuart"}}];
        $.Velocity.RunSequence(animationSequence);
    });

});









