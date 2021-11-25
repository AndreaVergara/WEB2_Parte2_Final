<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class LibroView{
    private $smarty;
   

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showBiblioteca($biblioteca, $rolUser = null, $userName = null){
        $this->smarty->assign('titulo','Biblioteca Autores Latinoamericanos');
        $this->smarty->assign('biblioteca',$biblioteca);
        $this->smarty->assign('userRol',$rolUser);
        $this->smarty->assign('userName',$userName);
        $this->smarty->display('../templates/listBiblioteca.tpl');

    }

    function showBook($book,$nombre,$apellido, $rolUser = null, $userName = null,$userId=null){
        $this->smarty->assign('titulo',$book ->titulo);
        $this->smarty->assign('autor',"$nombre $apellido");
        $this->smarty->assign('userRol',$rolUser);
        $this->smarty->assign('userName',$userName);
        $this->smarty->assign('userId',$userId);
        $this->smarty->assign('libro',$book);
        $this->smarty->display('../templates/bookDetail.tpl');
            
    }

    function showBooksOfAuthor($booksOfAuthor,$nombre,$apellido,$rolUser = null, $userName = null){
        $this->smarty->assign('nombre',$nombre);
        $this->smarty->assign('apellido', $apellido);
        $this->smarty->assign('librosAutor',$booksOfAuthor);
        $this->smarty->assign('userRol',$rolUser);
        $this->smarty->assign('userName',$userName);
        $this->smarty->display('../templates/listLibrosAutor.tpl');
    }
}