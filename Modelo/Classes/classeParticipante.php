<?php

class classeParticipante {

    private $idParticipante;
    private $nomeParticipante;
    private $emailParticipante;
    private $foneParticipante;
    private $dataCadastroParticipante;
    private $statusParticipante;
    private $nomeEquipe;
    private $nomeRobo;

    function getNomeParticipante() {
        return $this->nomeParticipante;
    }

    function getEmailParticipante() {
        return $this->emailParticipante;
    }

    function getFoneParticipante() {
        return $this->foneParticipante;
    }

    function getDataCadastroParticipante() {
        return $this->dataCadastroParticipante;
    }

    function getStatusParticipante() {
        return $this->statusParticipante;
    }

    function getNomeEquipe() {
        return $this->nomeEquipe;
    }

    function getNomeRobo() {
        return $this->nomeRobo;
    }

    function setNomeParticipante($nomeParticipante) {
        $this->nomeParticipante = $nomeParticipante;
    }

    function setEmailParticipante($emailParticipante) {
        $this->emailParticipante = $emailParticipante;
    }

    function setFoneParticipante($foneParticipante) {
        $this->foneParticipante = $foneParticipante;
    }

    function setDataCadastroParticipante($dataCadastroParticipante) {
        $this->dataCadastroParticipante = $dataCadastroParticipante;
    }

    function setStatusParticipante($statusParticipante) {
        $this->statusParticipante = $statusParticipante;
    }

    function setNomeEquipe($nomeEquipe) {
        $this->nomeEquipe = $nomeEquipe;
    }

    function setNomeRobo($nomeRobo) {
        $this->nomeRobo = $nomeRobo;
    }



}
