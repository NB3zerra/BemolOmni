<?php
class PagesController {
    public function login() {
        include_once './views/VW_login.php';
    }

    public function criar_conta() {
        include './views/VW_cadastrarUsuario.php';
    }

    public function Usuario_Home(){
        session_start();
        if(isset($_SESSION['Nome'])){
            include './views/VW_usuario_home.php';
        }else{
            include './views/404.php';
        }
    } 
}
