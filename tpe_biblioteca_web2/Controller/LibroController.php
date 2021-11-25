<?php

require_once "./Model/LibroModel.php";
require_once "./Model/AutorModel.php";
require_once "./View/LibroView.php";
require_once "./View/AdminView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Helpers/FunctionHelper.php";

class LibroController
{

    private $model;
    private $view;
    private $viewAdmin;
    private $authHelper;
    private $modelAutor;
    private $functionHelper;

    function __construct()
    {
        $this->model = new LibroModel();
        $this->modelAutor = new AutorModel();
        $this->view = new LibroView();
        $this->viewAdmin = new AdminView();
        $this->authHelper = new AuthHelper();
        $this->functionHelper = new FunctionHelper();
    }

    function showHome(){

        $biblioteca = $this->model->getBiblioteca();
        if(!empty($biblioteca)){
            if($this->authHelper->isLogged()){
                $userName= $this->authHelper->getLoggedUserName();
                $rolUser = $this->authHelper->getLoggedUserRol();
                $this->view->showBiblioteca($biblioteca,$rolUser, $userName);
            }else{
                $this->view->showBiblioteca($biblioteca);
            }
            
        }else{
            $mensajeError = "No hay libros en la biblioteca";
            if($this->authHelper->isLogged()){
                $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
            }else{
                $this->functionHelper->showErrorPage($mensajeError);
            }
            
        }
    }

    function  viewBook($id,$nombre,$apellido)
    {
        $mensajeError = "El libro solicitado no se encuentra en nuestra base de datos";
        if(!empty($id) && !empty($nombre) && !empty($apellido)){
            $book = $this->model->getBook($id);
            if($book){
                $autor = $this->modelAutor->getAuthor($book->id_autor);
                if($nombre == $autor->nombre && $apellido == $autor->apellido){
                    if($this->authHelper->isLogged()){
                        $userName= $this->authHelper->getLoggedUserName();
                        $rolUser = $this->authHelper->getLoggedUserRol();
                        $userId = $this->authHelper->getLoggedUserId();
                        $this->view->showBook($book,$nombre,$apellido, $rolUser,$userName,$userId);
                    }else{
                        $this->view->showBook($book,$nombre,$apellido);
                    }
                }else{
                    if($this->authHelper->isLogged()){
                        $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
                    }else{
                        $this->functionHelper->showErrorPage($mensajeError);
                    }
                }
            }else{
                if($this->authHelper->isLogged()){
                    $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
                }else{
                    $this->functionHelper->showErrorPage($mensajeError);
                }
            }
        }
        
    }


    function  viewBooksOfAuthor($id,$nombre,$apellido)
    {
        if(!empty($id) && !empty($nombre) && !empty($apellido)){
            $booksOfAuthor = $this->model->getBooksOfAuthor($id);
            if($booksOfAuthor){
                $autor = $this->modelAutor->getAuthor($id);
                if($nombre == $autor->nombre && $apellido == $autor->apellido){

                    if($this->authHelper->isLogged()){
                        $userName= $this->authHelper->getLoggedUserName();
                        $rolUser = $this->authHelper->getLoggedUserRol();
                        $this->view->showBooksOfAuthor($booksOfAuthor,$nombre,$apellido,$rolUser,$userName);
                    }else{
                        $this->view->showBooksOfAuthor($booksOfAuthor,$nombre,$apellido);
                    }

                }else{
                    $mensajeError = "El autor solicitado no se encuentra en nuestra base de datos";
                    if($this->authHelper->isLogged()){
                        $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
                    }else{
                        $this->functionHelper->showErrorPage($mensajeError);
                    }
                }
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                if($this->authHelper->isLogged()){
                    $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
                }else{
                    $this->functionHelper->showErrorPage($mensajeError);
                }
            }

        }   
       
    }

    function showHomeAdmin(){
        $biblioteca = $this->model->getBiblioteca();
        $autores = $this->modelAutor->getAuthors();
        
        if($this->authHelper->isLogged()){
            $userName= $this->authHelper->getLoggedUserName();
            $rolUser = $this->authHelper->getLoggedUserRol();
            if($rolUser=='administrador'){
                $this->viewAdmin->showBibliotecaAdmin($biblioteca,$autores,$userName,$rolUser);
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$rolUser,$userName);            }
        }else{
            header("Location:".BASE_URL."login");
        }
    }

    // function editarBook($id){
    //     $this->authHelper->checkLoggedIn();
    //     if($this->authHelper->getLoggedUserRol()=='administrador' && !empty($_POST['titulo'])&& !empty($_POST['autor'])&& !empty($_POST['anio'])&& !empty($_POST['sinopsis'])){
    //         $titulo = $_POST['titulo'];
    //         $autor = $_POST['autor'];
    //         $anio = $_POST['anio'];
    //         $sinopsis = $_POST['sinopsis'];
    //         $this->model->updateBook($id,$titulo, $autor,$anio,$sinopsis);
    //     }
    // }

    
    function deleteBook($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador' ){
            $this->model->deleteBookFromDB($id);
            header("Location:".BASE_URL."homeAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
       
    }

    function updateBookForm($id){
        if($this->authHelper->isLogged()){
            $userName= $this->authHelper->getLoggedUserName();
            $rolUser = $this->authHelper->getLoggedUserRol();
            if($rolUser=='administrador'){
                $book = $this->model->getBook($id);
                $autores = $this->modelAutor->getAuthors();
                $this->viewAdmin->showUpdateBook($book,$autores,$userName,$rolUser);
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$rolUser,$userName);
            }
            
        }else{
            header("Location:".BASE_URL."login");
        }
        

    }

    function updateBook($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador' && !empty($_POST['titulo'])&& !empty($_POST['autor'])&& !empty($_POST['anio'])){
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $anio = $_POST['anio'];
            $sinopsis = $_POST['sinopsis'];

            $this->model->updateBook($id,$titulo, $autor,$anio,$sinopsis);
            header("Location:".BASE_URL."homeAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
    }

    function addBook(){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador' && !empty($_POST['titulo']) && !empty($_POST['anio'])){
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $anio = $_POST['anio'];
            $sinopsis = $_POST['sinopsis'];

            $this->model->addBookDB($titulo,$autor,$anio, $sinopsis);
            header("Location:".BASE_URL."homeAdmin");
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
    }

   
}

