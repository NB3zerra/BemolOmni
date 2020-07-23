<?php
class PagesController {
    public function login() {
        include_once './views/VW_login.php';
    }

    public function home() {
        include_once './views/VW_home.php';
    }

    public function conta(){
        include_once './views/VW_cadastrarUsuario.php';
    }
}
