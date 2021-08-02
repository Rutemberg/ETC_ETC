<?php

class Atividades {

    public function adicionarAtividades($evento, $nomeItem, $iconeItem) {
        ?>
        <li class="Atividades_itens_item"><img src="Imagem/Icones/IconesAtividades/<?php echo $iconeItem ?>"><br><br><?php echo $nomeItem ?></li>


        <?php if ($evento == "SeguidorDeLinha") { ?>
            <span class="scrollDownloadInicio scrollveratividades">
                <img src="Imagem/Icones/Rolar.png">    
            </span>
            <div class="Atividades_itens_item_sobre">
                <div class="Atividades_itens_item_sobre_background">


                    <div class="Atividades_itens_item_sobre_corpo">
                        <div class="Atividades_download">
                            <header class="Atividades_download_cabecalho">
                                <img src="Imagem/Icones/IconesAtividades/<?php echo $iconeItem ?>"><h3><?php echo $nomeItem ?></h3>
                            </header>
                            <article class="Atividades_download_download">
                                <p> - Entenda as instruções e regras</p>
                                <p style="font-size: 16;font-family: 'Roboto-Bold'">O arquivo para DOWNLOAD já está disponível</p>
                            </article>
                            <a href="ArquivosDownload/RegrasSeguidorDeLinha.pdf" download="INSTRUÇÕES DA MODALIDADE SEGUIDOR DE LINHA">
                                <div class="Botao_download">
                                    <img src="Imagem/Icones/Download.png">
                                    <p>Download</p>
                                    <img src="Imagem/Icones/downloadPDF.png" style="float: right">
                                    <p style="font-size: 13;font-family: 'Roboto-Light'; text-transform: none;color: #212121;float: left;margin: 0">Regras/instruçôes</p>
                                </div></a>
                        </div>
                        <div class="Atividades_Imagemgif" style="background: url('Gif/Seguidor2.gif') no-repeat center;background-size: 100% auto;"></div>
                        <span class="scrollDownloadFim scrollveratividadesFim">
                            <img src="Imagem/Icones/Subir.png">      
                        </span>
                    </div>
                </div>
            </div>


        <?php } ?>
        
        <?php if ($evento == "OpenArena") { ?>
            <span class="scrollDownloadInicio scrollveratividades">
                <img src="Imagem/Icones/Rolar.png">    
            </span>
            <div class="Atividades_itens_item_sobre">
                <div class="Atividades_itens_item_sobre_background">


                    <div class="Atividades_itens_item_sobre_corpo">
                        <div class="Atividades_download">
                            <header class="Atividades_download_cabecalho">
                                <img src="Imagem/Icones/IconesAtividades/<?php echo $iconeItem ?>"><h3><?php echo $nomeItem ?></h3>
                            </header>
                            <article class="Atividades_download_download">
                                <p> - Entenda as instruções e regras</p>
                                <p style="font-size: 16;font-family: 'Roboto-Bold'">O arquivo para DOWNLOAD já está disponível</p>
                            </article>
                            <a href="ArquivosDownload/INSTRUÇÕES DA MODALIDADE OPEN ARENA.pdf" download="INSTRUÇÕES DA MODALIDADE OPEN ARENA">
                                <div class="Botao_download">
                                    <img src="Imagem/Icones/Download.png">
                                    <p>Download</p>
                                    <img src="Imagem/Icones/downloadPDF.png" style="float: right">
                                    <p style="font-size: 13;font-family: 'Roboto-Light'; text-transform: none;color: #212121;float: left;margin: 0">Regras/instruçôes</p>
                                </div></a>
                        </div>
                        <div class="Atividades_Imagemgif" style="background: url('Gif/OpenArena.gif') no-repeat center;background-size: 100% auto;"></div>
                        <span class="scrollDownloadFim scrollveratividadesFim">
                            <img src="Imagem/Icones/Subir.png">      
                        </span>
                    </div>
                </div>
            </div>


        <?php } ?>
        <?php if ($evento == "SumoDeRobo") { ?>
            <span class="scrollDownloadInicio scrollveratividades">
                <img src="Imagem/Icones/Rolar.png">    
            </span>


            <div class="Atividades_itens_item_sobre">
                <div class="Atividades_itens_item_sobre_background">



                    <!--                    SOBRE A ATIVIDADE cadastro SUMOBOt-->
                    <div class="Atividades_itens_item_sobre_corpo">

                        <div class="Atividades_download">

                            <header class="Atividades_download_cabecalho">
                                <img src="Imagem/Icones/IconesAtividades/<?php echo $iconeItem ?>"><h3><?php echo $nomeItem ?></h3>
                            </header>
                            <article class="Atividades_download_download">
                                <p>As inscrições já estão abertas!</p>
                                <p style="font-size: 16;font-family: 'Roboto-Bold'">Inscreva sua equipe clicando no botão abaixo</p>
                            </article>

                            <div class="Botao_download Botao_cadastro" onclick="Linkinscrevase()">
                                <img src="Imagem/Icones/Form.png">
                                <p style="">Inscreva-se</p>
                                <img src="Imagem/Icones/Download.png" style="float: right;transform: rotate(-90deg)">
                            </div>

                        </div>
                        <div class="Atividades_Imagemgif" style="background: url('Gif/Sumo.gif') no-repeat center;background-size: 100% auto;"></div>
                        <span class="scrollDownloadFim scrollveratividadesFim">
                            <img src="Imagem/Icones/Subir.png">      
                        </span>
                    </div>
                    <!--                    SOBRE A ATIVIDADE cadastro SUMOBOt-->


                    <!--                    CADASTRO-->
                    <div class="CorpoCadastro" id="CorpoCadastro">
                        <div class="Cadastro" id="Cadastro">
                            <form method="POST" action="Controle/Controladores/controladorCadastroPalestrante.php" name="formulario" class="formulario" id="formulario" onsubmit="return ValidaFormulario();">

                                <div class="etapas_cadastro etapa1">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;">
                                        <header class="cabecalho_cadastro_etapa">
                                            <img src="Imagem/IconesCadastro/Equipe.png">
                                        </header>
                                        <input class="nomedaequipe" name="nomedaequipe" id="nomedaequipe" placeholder="Nome da equipe" onfocus="dialog1()" onkeypress="botaoaparece();" onfocusout="botaoaparece();">
                                        <span class="cadastro_button" id="cadastro_button">
                                        </span>
                                    </div> 
                                </div> 

                                <div class="etapas_cadastro etapa2">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;">
                                        <header class="cabecalho_cadastro_etapa">
                                            <img src="Imagem/IconesCadastro/Robot.png">
                                        </header>
                                        <input class="nomedorobo" name="nomedorobo" id="nomedorobo" placeholder="Nome do robô" onfocus="dialog2()" onkeypress="botaoaparece2();" onfocusout="botaoaparece2();">
                                        <span class="cadastro_button" id="cadastro_button2">
                                        </span>
                                    </div> 
                                </div> 

                                <div class="etapas_cadastro etapa3">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;">
                                        <header class="cabecalho_cadastro_etapa">
                                            <img src="Imagem/IconesCadastro/Lider.png">
                                        </header>
                                        <input class="nomedolider" name="nomedolider" id="nomedolider" placeholder="Nome do lider" onfocus="dialog3()" onkeypress="botaoaparece3();" onfocusout="botaoaparece3();">
                                        <span class="cadastro_button" id="cadastro_button3">
                                        </span>
                                    </div> 
                                </div> 

                                <div class="etapas_cadastro etapa4">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;">
                                        <header class="cabecalho_cadastro_etapa" style="height: 100px;margin-top: 40px;margin-bottom: 40px">
                                            <img src="Imagem/IconesCadastro/email.png">
                                        </header>
                                        <input class="emaildolider" name="emaildolider" id="emaildolider" placeholder="Email do lider" onfocus="dialog4()" onkeypress="botaoaparece4();" onfocusout="botaoaparece4();">
                                        <span class="cadastro_button" id="cadastro_button4">
                                        </span>
                                    </div> 
                                </div> 

                                <div class="etapas_cadastro etapa5">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;">
                                        <header class="cabecalho_cadastro_etapa" style="height: 120px;margin-top: 30px;margin-bottom: 30px">
                                            <img src="Imagem/IconesCadastro/Fone.png">
                                        </header>
                                        <input class="fonedolider" name="fonedolider" id="fonedolider" placeholder="Telefone do lider" onfocus="dialog5()" onkeypress="botaoaparece5();" onfocusout="botaoaparece5();">
                                        <span class="cadastro_button" id="cadastro_button5">
                                        </span>
                                    </div> 
                                </div>

                                <div class="etapas_cadastro etapa6" id="etapa6">
                                    <button id="etapa6participante" style="width: 100%;position: absolute;top:0;right: 0;opacity: 0"></button>
                                    <div style="width: 50%;float: left;display: table;height: 100%">
                                        <div style="vertical-align: middle;display: table-cell;position: static;" id="Itens_participantes">
                                            <div class="item_participante">
                                                <input type="text" name="valor[0][participante]" class="participante" id="participante" onfocus="dialog6()" placeholder="1° membro" onkeypress="botaoaparece6()">
                                            </div>
                                        </div>
                                    </div> 
                                    <div style="width: 50%;float: right;display: table;height: 100%">
                                        <div style="vertical-align: middle;display: table-cell;position: static;">
                                            <a id="botao_add"><img src="Imagem/IconesCadastro/addUser.png" style="width: 100px;"></a>
                                        </div>
                                    </div>
                                    <span class="cadastro_button" id="cadastro_button6">
                                    </span>

                                </div> 

                                <div class="etapas_cadastro etapa7" style="border: 1px solid black">
                                    <div style="height: 100%; width: 100%;vertical-align: middle;display: table-cell;position: static;font-family: 'Roboto-Regular';color: white">
                                        <header class="cabecalho_cadastro_etapa">
                                            <button id="downloadRegulamento" style="background: none;border: none;outline: none;outline-color: transparent;width: 100%" onfocus="dialog7()">
                                            </button>
                                            <a class="ImgRegulamento" href="ArquivosDownload/INSTRUÇÕES DA MODALIDADE SUMÔ ROBÔ.pdf" download="INSTRUÇÕES DA MODALIDADE SUMÔ ROBÔ">
                                                <img src="Imagem/IconesCadastro/DownloadRegulamento.png" style="height: 100px;width: auto;margin-top: 40px">
                                            </a>

                                        </header>
                                        <div class="ChekedRegulamento">
                                        <input type="checkbox" name="regulamento" value="Bike" class="regulamento" id="regulamento" > Fiz o download do arquivo, li e concordei com o regulamento<br>
                                        </div>
                                        <input type="submit" class="submit" value="Concluir e enviar">
                                    </div> 
                                </div> 

                            </form>
                        </div>
                    </div>
                    <!--                    CADASTRO-->


                </div>
            </div>


        <?php } ?>
        <?php
    }

}
