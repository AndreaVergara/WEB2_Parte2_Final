<?php
require_once "./Model/UserModel.php";
require_once "./View/AdminView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./Helpers/FunctionHelper.php";
 
 class LoginController{

    private $model;
    private $view;
    private $controllerLibro;
    private $authHelper;
    private $functionHelper;
    

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AdminView();
        $this->controllerLibro = new LibroController();
        $this->authHelper = new AuthHelper();
        $this->functionHelper = new FunctionHelper();
    }


    public function logout() {
        $this->authHelper->logout();
        header("Location:".BASE_URL."home");
    }


    function showFormLogin(){
        if(!$this->authHelper->isLogged()){
            $this->view->showLogin();
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
        
    }

   

    public function verifyLogin(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
           
            $user = $this->model->getUser($email);
            
            if($user && password_verify($password,($user->contrasenia))){ //password_verify funcion del sistema para comparar pass con hash
                $this->authHelper->login($user);
                if($this->authHelper->getLoggedUserRol()=='administrador'){
                    header("Location:".BASE_URL."homeAdmin");
                }else{
                    header("Location:".BASE_URL."home");
                }
                
            }
                
        }else{
            $this->view->showLogin("Acceso denegado");
        }
    }
    

    function showFormRegistro(){
        if(!$this->authHelper->isLogged()){
            $this->view->showRegistro();
        }else{
            $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
        }
        
    }

    function verifyRegistro(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $userEmail = $_POST['email'];
            $user = $this->model->getUser($userEmail);
            if($user){
                $this->view->showRegistro("Este usuario ya está registrado. Intente con un nuevo usuario.");
            }else{
                $userPassword=password_hash($_POST['password'],PASSWORD_BCRYPT); 
                $this->model->addUser($userEmail, $userPassword);

                $user = $this->model->getUser($userEmail);
                $this->authHelper->login($user);
                header("Location:".BASE_URL."home");

            }
           
        }
    }

    function adminUsuarios(){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol() !='administrador'){
            header("Location:".BASE_URL."home");
        }else{
            $usuarios = $this->model->getUsers();
            $userName = $this->authHelper->getLoggedUserName();
            $userRol = $this->authHelper->getLoggedUserRol();
            $this->view->showUsers($usuarios,$userName,$userRol);
        }
    }

    function cambiarRol($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador'){
            $usuario = $this->model->getUserId($id);
            if($usuario){
                $rol = 0;
               if($usuario->esAdministrador==0){
                    $rol = 1;
                }
                $this->model->updateUser($rol,$usuario->id_usuario);
                header("Location:".BASE_URL."adminUsuarios");
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
            $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
            }
           
        }else{
            header("Location:".BASE_URL."home");
        }
       

    }
    function deleteUsuario($id){
        $this->authHelper->checkLoggedIn();
        if($this->authHelper->getLoggedUserRol()=='administrador'){

            $usuario = $this->model->getUserId($id);
            if($usuario){
                //eLIMINAR EL USUARIO VER QUE ONDA CON LOS COMENTARIOS MAS ADELANTE
                $this->model->deleteUser($id);
                header("Location:".BASE_URL."adminUsuarios");
            }else{
                $mensajeError = "Ups! Parece que algo salió mal";
                $this->functionHelper->showErrorPage($mensajeError,$this->authHelper->getLoggedUserRol(),$this->authHelper->getLoggedUserName());
            }
        }else{
            header("Location:".BASE_URL."home");
        }

    }

}