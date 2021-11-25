<?php

class LibroModel{

    private $db;
    
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');
    }

    function getBiblioteca(){
        $sentencia = $this->db->prepare( "SELECT id_libro,titulo,nombre,apellido FROM libro INNER JOIN autor ON libro.id_autor = autor.id_autor");
        $sentencia->execute();
        $biblioteca = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
       return $biblioteca;
        
    }

    function getBook($id){

        $sentencia = $this->db->prepare( "SELECT * FROM libro WHERE id_libro = ?");
        $sentencia->execute(array($id));
        $book = $sentencia->fetch(PDO::FETCH_OBJ);
        return $book;
        
    }

    function getBooksOfAuthor($id){
  
        $sentencia = $this->db->prepare( "SELECT libro.* FROM libro  WHERE id_autor = ?");
        $sentencia->execute(array($id));
        $books = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
       return $books;
        
    }

    function deleteBookFromDB($id){
        $sentencia =  $this->db->prepare("DELETE FROM libro WHERE id_libro = ?");
        $sentencia ->execute(array($id));
    }

    function updateBook($id,$titulo, $autor,$anio,$sinopsis){
        $sentencia = $this->db->prepare("UPDATE libro SET titulo = ?, anio = ?, sinopsis = ?, id_autor = ? WHERE id_libro = ?");
        $sentencia ->execute(array($titulo, $anio,$sinopsis,$autor,$id));
    }

    function addBookDB($titulo,$autor,$anio, $sinopsis){
        $sentencia = $this->db->prepare("INSERT INTO libro(titulo, anio, sinopsis, id_autor) VALUES(?,?,?,?)");
        $sentencia->execute(array($titulo, $anio, $sinopsis, $autor));
    }

    
    
   
}