<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class ComentarioView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showComentariosAdmin($userRol,$userName){
        $this->smarty->assign('userName',$userName);
        $this->smarty->assign('userRol',$userRol);
        $this->smarty->display('../templates/comentariosAdmin.tpl');
    }

}