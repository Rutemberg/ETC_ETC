<?php
if (!empty($_GET["valor"])):

    $idPalestrante = $_GET["valor"];

    require_once '../Modelo/DAO/classePalestranteDAO.php';

    $novoPalestranteDAO = new classePalestranteDAO();
    $palestrantes = $novoPalestranteDAO->buscarPalestrantePorId($idPalestrante);
    $quantidadePalestrantes = count($palestrantes);

    if (isset($palestrantes)) {
        foreach ($palestrantes as $palestrante) {
            ?>
            <div class="Corpo_Titulo_Background_informacoes_Palestrante">
            </div>



            <div class="Informacoes_palestrante" id="Informacoes_palestrante">
                <div class="palestrante_Imagem" style="        
                     background: url('<?php echo "Imagem/IMGPalestrante/{$palestrante->urlFotoPalestrante}"; ?>') no-repeat center;
                     -webkit-background-size: cover;
                     -moz-background-size: cover;
                     -o-background-size: cover;
                     background-size: cover;"></div>

                <div class="Corpo_Titulo_Informacoes_palestrantes">
                    <div class="Titulos_Informacoes">
                        <h1 class="Titulo1_informacoes_palestrante">
                            <?php
                            echo $palestrante->nomePalestrante;
                            ?></h1>
                        <h2 class="Titulo2_informacoes_palestrante"><?php echo $palestrante->emailPalestrante; ?></h2>
                    </div>
                </div>

                <div class="palestrante_Local">
                    <img src="Imagem/Icones/Localblack.png">
                    <?php
                    echo $palestrante->localPalestrante;
                    ?>
                </div>

                <div class="palestrante_Horario">
                    <img src="Imagem/Icones/ClockBlack.png">
                    <?php
                    $inicio = $palestrante->inicio = strftime('%H:%M', strtotime($palestrante->inicio));
                    $Termino = $palestrante->termino = strftime('%H:%M', strtotime($palestrante->termino));
                    echo "{$inicio}"
                    . " as " . "$Termino";
                    ?>
                </div>

                <div class="palestrante_Curriculo">
                    <?php
                    echo $palestrante->miniCurriculoPalestrante;
                    ?>
                </div>
                
                <div class="palestrante_Frase">
                    <?php
                    echo $palestrante->frasePalestrante;
                    ?>
                </div>
                
                <div class="palestrante_Tema">
                    <p>Tema</p>
                    <?php
                    echo $palestrante->temaPalestra;
                    ?>
                </div>

            </div>



            <?php
        }
    }
    
    
endif;
