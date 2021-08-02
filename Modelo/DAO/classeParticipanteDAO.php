<?php
require 'conexao.php';

class classeParticipanteDAO {

    public function cadastrarParticipante(classeParticipante $novoParticipante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO participante(`nomeParticipante`,`emailParticipante`,`foneParticipante`,`nomeEquipe`,`nomeRobo`,`dataCadastroParticipante`) VALUES (?,?,?,?,?,now());";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoParticipante->getNomeParticipante());
            $stmt->bindValue(2, $novoParticipante->getEmailParticipante());
            $stmt->bindValue(3, $novoParticipante->getFoneParticipante());
            $stmt->bindValue(4, $novoParticipante->getNomeEquipe());
            $stmt->bindValue(5, $novoParticipante->getNomeRobo());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function cadastrarMembro($nomeMembro,$equipeMembro) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO membros(`nomeMembro`,`equipeMembro`,`dataCadastroMembros`) VALUES (?,?,now());";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $nomeMembro);
            $stmt->bindValue(2, $equipeMembro);
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarParticipante() {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM Participante";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $Participantes = array();
            While ($Participante = $stmt->fetchObject(__CLASS__)) {
                $Participantes[] = $Participante;
            }

            return $Participantes;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function pesquisarParticipantePorNome($nomeParticipante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM participante WHERE nomeParticipante LIKE :nomeParticipante";
            $nomeParticipante = "%" . $nomeParticipante . "%";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nomeParticipante', $nomeParticipante, PDO::PARAM_STR);
            $stmt->execute();
            $Participantes = array();
            While ($Participante = $stmt->fetchObject(__CLASS__)) {
                $Participantes[] = $Participante;
            }

            return $Participantes;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscarParticipantePorId($idParticipante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM participante WHERE idParticipante = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idParticipante);
            $stmt->execute();
            $Participante = $stmt->fetchObject(__CLASS__);
            session_start();
            $_SESSION['ParticipanteAlterado'] = TRUE;
            $_SESSION['idParticipanteAlterado'] = $Participante->idParticipante;
            $_SESSION['nomeParticipanteAlterado'] = $Participante->nomeParticipante;
            $_SESSION['emailParticipanteAlterado'] = $Participante->emailParticipante;
            $_SESSION['dataCadastroParticipanteAlterado'] = $Participante->dataCadastroParticipante;
            $_SESSION['statusParticipanteAlterado'] = $Participante->statusParticipante;
            return $Participante;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function alterarParticipante(classeParticipante $ParticipanteAlterado) {
        try {
            $pdo = conexao::getInstance();
            $sql = "UPDATE participante SET "
                    . "nomeParticipante=?,"
                    . "emailParticipante=?,"
                    . "senhaParticipante=?"
                    . " WHERE idParticipante = ?; ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $ParticipanteAlterado->getNomeParticipante());
            $stmt->bindValue(2, $ParticipanteAlterado->getEmailParticipante());
            $stmt->bindValue(3, $ParticipanteAlterado->getSenhaParticipante());
            $stmt->bindValue(4, $ParticipanteAlterado->getIdParticipante());
            return $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function excluirParticipante($idParticipante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "DELETE FROM participante WHERE idParticipante = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idParticipante);
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            
        }
    }

//put your code here
}
