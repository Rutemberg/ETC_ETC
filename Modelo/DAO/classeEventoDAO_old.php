<?php

require_once 'conexao.php';

class classeEventoDAO {

    public function cadastrarEvento(classeEvento $novoEvento) {
        try {
            $pdo = conexao::getInstance();
            $sql = "INSERT INTO palestrante(nomeEvento,emailEvento,temaEvento,miniCurriculoEvento,urlFotoEvento) VALUES (?,?,?,?,?);";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoEvento->getNomeEvento());
            $stmt->bindValue(2, $novoEvento->getEmailEvento());
            $stmt->bindValue(3, $novoEvento->getSenhaEvento());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function listarEvento() {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM palestrante";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $Eventos = array();
            While ($Evento = $stmt->fetchObject(__CLASS__)) {
                $Eventos[] = $Evento;
            }

            return $Eventos;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function pesquisarEventoPorNome($nomeEvento) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM evento WHERE nomeEvento LIKE :nomeEvento";
            $nomeEvento = "%" . $nomeEvento . "%";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nomeEvento', $nomeEvento, PDO::PARAM_STR);
            $stmt->execute();
            $Eventos = array();
            While ($Evento = $stmt->fetchObject(__CLASS__)) {
                $Eventos[] = $Evento;
            }

            return $Eventos;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function buscarEventoPorId($idEvento) {
        try {
            $pdo = conexao::getInstance();
            $sql = "SELECT * FROM palestrante WHERE idEvento = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idEvento);
            $stmt->execute();
            $Eventos = array();
            While ($Evento = $stmt->fetchObject(__CLASS__)) {
                $Eventos[] = $Evento;
            }

            return $Eventos;
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function alterarEvento(classeEvento $EventoAlterado) {
        try {
            $pdo = conexao::getInstance();
            $sql = "UPDATE palestrante SET "
                    . "nomeEvento=?,"
                    . "emailEvento=?,"
                    . "senhaEvento=?"
                    . " WHERE idEvento = ?; ";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $EventoAlterado->getNomeEvento());
            $stmt->bindValue(2, $EventoAlterado->getEmailEvento());
            $stmt->bindValue(3, $EventoAlterado->getSenhaEvento());
            $stmt->bindValue(4, $EventoAlterado->getIdEvento());
            return $stmt->execute();
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
            
    }

    public function excluirEvento($idEvento) {
        try {
            $pdo = conexao::getInstance();
            $sql = "DELETE FROM palestrante WHERE idEvento = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $idEvento);
            $result = $stmt->execute();
            return $result;
        } catch (Exception $ex) {
            
        }
    }

    //put your code here
}

?>
