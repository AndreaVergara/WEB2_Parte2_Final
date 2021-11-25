<?php
require_once "./View/ComentarioView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Helpers/FunctionHelper.php";



class ComentarioController{

    private $view;
    private $authHelper;
    private $functionHelper;

    function __construct()
    {
        $this->view = new ComentarioView();
        $this->authHelper = new AuthHelper();
        $this->functionHelper = new FunctionHelper();
    }

    function adminComentario(){
        if($this->authHelper->isLogged()){
            $userName= $this->authHelper->getLoggedUserName();
            $rolUser = $this->authHelper->getLoggedUserRol();
            if($rolUser=='administrador'){
                $this->view->showComentariosAdmin($rolUser,$userName);
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$rolUser,$userName);
            }
        }
    }

}