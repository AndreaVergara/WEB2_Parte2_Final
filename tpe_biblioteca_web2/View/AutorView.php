<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class AutorView{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

   

    function showHomeLocation(){
        header("Location:".BASE_URL."home");
    }

    
    
    function showAuthors($authors,$rolUser = null, $userName = null){
        $this->smarty->assign('titulo','Autores Latinoamericanos');
        $this->smarty->assign('autores',$authors);
        $this->smarty->assign('userRol',$rolUser);
        $this->smarty->assign('userName',$userName);
        $this->smarty->display('../templates/listAutores.tpl');

    }

    

}