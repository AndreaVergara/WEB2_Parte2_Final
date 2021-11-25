<?php

require_once "./Model/AutorModel.php";
require_once "./View/AutorView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./View/AdminView.php";
require_once "./Helpers/FunctionHelper.php";



class AutorController{

    private $model;
    private $view;
    private $viewAdmin;
    private $authHelper;
    private $functionHelper;

    function __construct()
    {
        $this->model = new AutorModel();
        $this->view = new AutorView();
        $this->viewAdmin = new AdminView();
        $this->authHelper = new AuthHelper();
        $this->functionHelper = new FunctionHelper();
    }

    function viewAuthors(){

        $authors = $this->model->getAuthors();
        if($authors){
            if($this->authHelper->isLogged()){
                $userName= $this->authHelper->getLoggedUserName();
                $rolUser = $this->authHelper->getLoggedUserRol();
                $this->view->showAuthors($authors,$rolUser,$userName);
            }else{
                $this->view->showAuthors($authors);
            }
        }else{
            $mensajeError = "No hay autores en la biblioteca";
            $this->functionHelper->showErrorPage($mensajeError);
        }
        

    }   

    function authorsAdmin(){
        if($this->authHelper->isLogged()){
            $userName= $this->authHelper->getLoggedUserName();
            $rolUser = $this->authHelper->getLoggedUserRol();
            if($rolUser=='administrador'){
                $autores = $this->model->getAuthors();
                $this->viewAdmin->showAuthorsAdmin($autores,$rolUser,$userName);
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$rolUser,$userName);
            }
           
        }else{
            header("Location:".BASE_URL."login");
        }
    }

    function updateAuthorForm($id){
        if($this->authHelper->isLogged()){
            $userName= $this->authHelper->getLoggedUserName();
            $rolUser = $this->authHelper->getLoggedUserRol();
            $autores = $this->model->getAuthors();
            if($rolUser=='administrador'){
                $this->viewAdmin->showUpdateAuthor($autores,$id,$rolUser,$rolUser);
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$rolUser,$userName);
            }
            
        }else{
            header("Location:".BASE_URL."login");
        }
    }

    function updateAuthorSave($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador' && !empty($_POST['nombre'])&& !empty($_POST['apellido'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $this->model->updateAuthor($id,$nombre, $apellido);
            header("Location:".BASE_URL."authorsAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
    }

    function addAuthor(){
        $this->authHelper->checkLoggedIn();
        if( $this->authHelper->getLoggedUserRol()=='administrador' && !empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            $this->model->addAuthorDB($nombre,$apellido);
            header("Location:".BASE_URL."authorsAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
    }

    function deleteAuthor($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador'){
            $this->model->deleteAuthorFromDB($id);
            header("Location:".BASE_URL."authorsAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
    }
    
}

