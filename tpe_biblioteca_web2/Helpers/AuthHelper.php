<?php

class AuthHelper{

    function __construct()
    {
        
    }

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['EMAIL'] = $user->email;
        $_SESSION['ID'] = $user->id_usuario;
        if($user->esAdministrador == 1){
            $_SESSION['USERROL'] = 'administrador';
        }
        if($user->esAdministrador == 0){
            $_SESSION['USERROL'] = 'usuario';
        }
       
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["EMAIL"])){
            header("Location:".BASE_URL."login");
        }
    }

    function isLogged(){
        session_start();
       
        return (isset($_SESSION["EMAIL"]));
    }

    function getLoggedUserName(){
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['EMAIL'];
    }

    function getLoggedUserId(){
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['ID'];
    }

    function getLoggedUserRol(){
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['USERROL'];
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location:".BASE_URL."home");
    }
   

}