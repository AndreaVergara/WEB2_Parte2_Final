<?php

class ComentarioModel{

    private $db;
    
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');
    }

    function getComentariosOfBook($id){
  
        $sentencia = $this->db->prepare( "SELECT comentario.*, email FROM comentario INNER JOIN usuario  WHERE comentario.id_usuario=usuario.id_usuario AND id_libro = ?");
        $sentencia->execute(array($id));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $comentarios;
        
    }

    function getComentariosOfBookOrdenado($id,$atributo,$orden){
  
        $sentencia = $this->db->prepare( "SELECT comentario.*, email FROM comentario INNER JOIN usuario  WHERE comentario.id_usuario=usuario.id_usuario AND id_libro = ? ORDER BY $atributo $orden");
        $sentencia->execute(array($id));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $comentarios;
        
    }

    function getComentariosOfBookPorPuntuacion($idLibro,$puntuacion){
        $sentencia = $this->db->prepare( "SELECT comentario.*, email FROM comentario INNER JOIN usuario  WHERE comentario.id_usuario=usuario.id_usuario AND id_libro = ? AND puntuacion = ?");
        $sentencia->execute(array($idLibro,$puntuacion));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
        return $comentarios;
        
    }


    function addComentario($comentario,$puntuacion,$idLibro,$idUsuario,$fecha){
        $sentencia = $this->db->prepare("INSERT INTO comentario(comentario, puntuacion, id_libro, id_usuario,fecha) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($comentario, $puntuacion,$idLibro,$idUsuario,$fecha));
    }

    function getComentario($id){
        $sentencia = $this->db->prepare( "SELECT comentario.* FROM comentario  WHERE id_comentario = ?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
    
       return $comentario;
    }

    function getComentarios(){
        $sentencia = $this->db->prepare( "SELECT * FROM comentario");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
       return $comentarios;
    }

    function deleteComentario($id){
        $sentencia =  $this->db->prepare("DELETE FROM comentario WHERE id_comentario = ?");
        $sentencia ->execute(array($id));
    }
}
