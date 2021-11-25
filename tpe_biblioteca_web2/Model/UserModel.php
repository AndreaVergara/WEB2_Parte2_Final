<?php

class UserModel{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');;
    }



    function getUser($email){
         //Obtengo el usuario de la base de datos
         $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
         $sentencia->execute([$email]);
         $user = $sentencia->fetch(PDO::FETCH_OBJ);
         return $user;
    }
    function getUserId($id){
        $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
         $sentencia->execute([$id]);
         $user = $sentencia->fetch(PDO::FETCH_OBJ);
         return $user;
    }

    function getUsers(){
        $sentencia = $this->db->prepare( "SELECT id_usuario,email,esAdministrador FROM usuario");
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
       return $usuarios;
        
    }

    function addUser($userEmail, $userPassword){
        $sentencia = $this->db->prepare('INSERT INTO usuario(email,contrasenia ) VALUES (? , ?)');
        $sentencia->execute([$userEmail,$userPassword]);
    }

    function updateUser($rol,$id){
        $sentencia = $this->db->prepare("UPDATE usuario SET esAdministrador = ? WHERE id_usuario = ?");
        $sentencia ->execute(array($rol,$id));
    }

    function deleteUser($id){
        $sentencia =  $this->db->prepare("DELETE FROM usuario WHERE id_usuario = ?");
        $sentencia ->execute(array($id));
    }
}