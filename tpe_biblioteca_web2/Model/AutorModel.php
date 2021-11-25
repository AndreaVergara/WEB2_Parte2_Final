<?php

class AutorModel{

    private $db;
    
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');
    }

    
    

    function insertTask($mermelada, $descripcion,$prioridad, $finalizada){
        $sentencia = $this->db->prepare("INSERT INTO tareas(titulo, descripcion, prioridad, finalizada) VALUES(?,?,?,?)");
        $sentencia->execute(array($mermelada, $descripcion, $prioridad, $finalizada));
    }

  
    
    function getAuthors(){
        $sentencia = $this->db->prepare( "SELECT * FROM autor");
        $sentencia->execute();
        $authors = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
       return $authors;
        
    }

    function getAuthor($id){

        $sentencia = $this->db->prepare( "SELECT * FROM autor WHERE id_autor = ?");
        $sentencia->execute(array($id));
        $author = $sentencia->fetch(PDO::FETCH_OBJ);
        return $author;
        
    }

    function updateAuthor($id,$nombre, $apellido){
        $sentencia = $this->db->prepare("UPDATE autor SET nombre = ?, apellido = ? WHERE id_autor = ?");
        $sentencia ->execute(array($nombre,$apellido,$id));
    }
    function addAuthorDB($nombre,$apellido){
        $sentencia = $this->db->prepare("INSERT INTO autor(nombre, apellido) VALUES(?,?)");
        $sentencia->execute(array($nombre, $apellido));
    }
    
    function deleteAuthorFromDB($id){
        $sentencia =  $this->db->prepare("DELETE FROM autor WHERE id_autor = ?");
        $sentencia ->execute(array($id));
    }


}