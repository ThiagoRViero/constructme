<!-- Classe responsável por efetuar a inicialização, verificação e encerramento da sessão -->
<?php
    class Sessao {

        static function criaSessao($usuario, $senha){
            session_start();
            $stmt = conexao::getInstance();
            $stmt = $stmt->prepare("SELECT USUARIO, SENHA FROM usuarios WHERE USUARIO = :usuario AND senha = :senha");
            $stmt->bindParam(':usuario', $usuario);
            $stmt->bindParam(':senha', $senha);
            $stmt ->execute();
            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
            if(is_array($rs)){
                $_SESSION['usuario']= $usuario;
                header('Location: areaAdm.php');
            }else{
                header('Location: login.php?mensagem=senhaErrada');
            }
        }
        
        static function verificaSessao(){
            session_start();
            if(isset($_SESSION['usuario'])== false && $_SESSION['usuario']== null){
                header('Location: login.php?mensagem=sessaoNaoEncontrada');
            };
        }

        static function existeSessao(){
            session_start();
            if(isset($_SESSION['usuario'])== false && $_SESSION['usuario']== null){
                return false;
            } else {
                return true;
            }
            
        }

        static function encerraSessao(){
            session_start();
            $_SESSION = array();
            session_destroy();
            header('Location: index.php');
        }
    }
?>