<?php
require_once 'libs/smarty-master/libs/Smarty.class.php';
class FunctionHelper{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showErrorPage($error,$rolUser=null,$userName=null){
        $this->smarty->assign('error',$error);
        $this->smarty->assign('userRol',$rolUser);
        $this->smarty->assign('userName',$userName);
        $this->smarty->display('../templates/error.tpl');
    }



}