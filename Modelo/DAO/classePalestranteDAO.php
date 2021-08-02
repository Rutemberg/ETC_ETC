<?php

require_once 'conexao.php';

class classePalestranteDAO {

    public function cadastrarPalestrante(classePalestrante $novoPalestrante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO palestrante(nomePalestrante,emailPalestrante,temaPalestrante,miniCurriculoPalestrante,urlFotoPalestrante) VALUES (?,?,?,?,?);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoPalestrante->getNomePalestrante());
            $stmt->bindValue(2, $novoPalestrante->getEmailPalestrante());
            $stmt->bindValue(3, $novoPalestrante->getSenhaPalestrante());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarPalestrante($Evento) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM palestrante WHERE evento = '$Evento' AND comfirmado = 'sim' ORDER BY inicio ASC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $Palestrantes = array();
            While ($Palestrante = $stmt->fetchObject(__CLASS__)) {
                $Palestrantes[] = $Palestrante;
            }

            return $Palestrantes;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function pesquisarPalestrantePorNome($nomePalestrante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM palestrante WHERE nomePalestrante LIKE :nomePalestrante";
            $nomePalestrante = "%" . $nomePalestrante . "%";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nomePalestrante', $nomePalestrante, PDO::PARAM_STR);
            $stmt->execute();
            $Palestrantes = array();
            While ($Palestrante = $stmt->fetchObject(__CLASS__)) {
                $Palestrantes[] = $Palestrante;
            }

            return $Palestrantes;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscarPalestrantePorId($idPalestrante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM palestrante WHERE idPalestrante = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idPalestrante);
            $stmt->execute();
            $Palestrantes = array();
            While ($Palestrante = $stmt->fetchObject(__CLASS__)) {
                $Palestrantes[] = $Palestrante;
            }

            return $Palestrantes;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function alterarPalestrante(classePalestrante $PalestranteAlterado) {
        try {
            $pdo = conexao::getInstance();
            $sql = "UPDATE palestrante SET "
                    . "nomePalestrante=?,"
                    . "emailPalestrante=?,"
                    . "senhaPalestrante=?"
                    . " WHERE idPalestrante = ?; ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $PalestranteAlterado->getNomePalestrante());
            $stmt->bindValue(2, $PalestranteAlterado->getEmailPalestrante());
            $stmt->bindValue(3, $PalestranteAlterado->getSenhaPalestrante());
            $stmt->bindValue(4, $PalestranteAlterado->getIdPalestrante());
            return $stmt->execute();
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }

    public function excluirPalestrante($idPalestrante) {
        try {
            $pdo = conexao::getInstance();
            $sql = "DELETE FROM palestrante WHERE idPalestrante = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idPalestrante);
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            
        }
    }

    //put your code here
}

?>
