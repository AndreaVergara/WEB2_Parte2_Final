<?php

require_once "./Model/ComentarioModel.php";
require_once "./Model/LibroModel.php";
require_once "./View/ApiView.php";

class ApiComentarioController{

    private $model;
    private $modelBook;
    private $view;
   
    function __construct()
    {
        $this->model = new ComentarioModel();
        $this->view = new ApiView();
        $this->modelBook = new LibroModel();
    }


    function obtenerComentarios( ){
        if(!isset($_GET["idLibro"])){
            $comentarios = $this->model->getComentarios();
            return $this->view->response($comentarios, 200);
        }else{
            $idLibro=$_GET["idLibro"];
            $libro = $this->modelBook->getBook($idLibro);
            if($libro){
                if(!isset($_GET["sortBy"])){
                    if(isset($_GET["puntuacion"])){
                        $puntuacion= $_GET["puntuacion"];

                        if(is_numeric($puntuacion) && $this->esEntero($puntuacion) && $puntuacion>0 && $puntuacion<6){
                            $comentarios = $this->model->getComentariosOfBookPorPuntuacion($idLibro,$puntuacion);
                            return $this->view->response($comentarios, 200);
                        }else{
                            return $this->view->response("Error, operación no válida", 404);
                        }
                        
                    }else{
                        $comentarios = $this->model->getComentariosOfBook($idLibro);
                        return $this->view->response($comentarios, 200);
                    }
                }else{
                    if(isset($_GET["order"])&& ($_GET["sortBy"]=="puntuacion"|| $_GET["sortBy"]=="fecha" )&&( $_GET["order"]=="desc"||$_GET["order"]=="asc")){
                        $orden = $_GET["order"];
                        $atributo=$_GET["sortBy"];
                        $comentarios = $this->model->getComentariosOfBookOrdenado($idLibro,$atributo,$orden);
                        return $this->view->response($comentarios, 200);
                    }else{
                        return $this->view->response("Error, operación no válida", 404);
                    }
                }
            }else{
                return $this->view->response("El libro con el id=$idLibro no existe", 404);
            }
        }
       
    }


    function obtenerComentario($params = null){
        $id = $params[":ID"];
        $comentario = $this->model->getComentario($id);
        if($comentario){
            return $this->view->response($comentario, 200);
        }else{
            return $this->view->response("El comentario con el id=$id no existe", 404);
        }
       
    }

    function insertarComentario($params = null){
        //CHEQUEAR SI ES UN USUARIO LOGEADO???
        $body = $this->getBody();
        if(isset($body->comentario)&& isset($body->puntuacion)&& isset($body->id_libro)&& isset($body->id_usuario)&&$this->esEntero($body->puntuacion)&&($body->puntuacion>0)&&($body->puntuacion<6)){
            $libro= $this->modelBook->getBook($body->id_libro);
            if($libro){
                $this->model->addComentario($body->comentario, $body->puntuacion, $body->id_libro,$body->id_usuario,$body->fecha);
                $this->view->response("El comentario se insertó con éxito",200);
            }else{
                $this->view->response("El comentario no se pudo insertar",500);
            }
        }else{
            return $this->view->response("Error, operación no válida", 404);
        }
        
    }

    function eliminarComentario($params = null){
        //CHEQUEAR QUE SEA EL ADMINISTRADOR!
        $idComentario = $params[":ID"];
        $comentario = $this->model->getComentario($idComentario);
        if($comentario){
            $this->model->deleteComentario($idComentario);
            $this->view->response("El comentario se eliminó con éxito",200);
        }else{
            $this->view->response("El comentario no se pudo eliminar",500);
        }

    }

    private function getBody(){
        $bodyString = file_get_contents("php://input"); 
        return json_decode($bodyString); 
    }

    private function esEntero($valor){
        $real= (double) $valor;
        $entero = (int) $valor;
        return $real - $entero==0;

    }
}