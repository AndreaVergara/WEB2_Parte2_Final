<?php
/* Smarty version 3.1.39, created on 2021-11-24 22:42:57
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eea2118c8d2_74121280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27360a7623d451a01a10573d56f45ca24efe22b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\header.tpl',
      1 => 1637803990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eea2118c8d2_74121280 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
    
    <title>Biblioteca</title>
</head>

<body>
<div class="alto">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <div class="container-fluid">
        <?php if (!(isset($_smarty_tpl->tpl_vars['userRol']->value)) || ($_smarty_tpl->tpl_vars['userRol']->value != "administrador")) {?>
            <a class="logo" href="home">Biblioteca</a>
        <?php } else { ?>
            <a class="logo" href="homeAdmin">Biblioteca</a>
        <?php }?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    
                    <?php if (!(isset($_smarty_tpl->tpl_vars['userRol']->value)) || ($_smarty_tpl->tpl_vars['userRol']->value != "administrador")) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewAuthors">Autores</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="homeAdmin">Home</a>
                        </li>
                    <?php }?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['userRol']->value))) {?>
                        <li class="nav-item">

                            <a class="nav-link" href="login">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse">Registrarse</a>
                        </li>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['userRol']->value)) && ($_smarty_tpl->tpl_vars['userRol']->value == "administrador")) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="authorsAdmin">Autores</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="adminUsuarios">Administrar Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminComentarios">Administrar Comentarios</a>
                        </li>
                        <span class="navbar-text">
                            ADMINISTRADOR: <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>

                        </span>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['userRol']->value)) && ($_smarty_tpl->tpl_vars['userRol']->value == "usuario")) {?> 
                        <span class="navbar-text">
                            USUARIO: <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>

                        </span>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['userRol']->value))) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Cerrar Sesión</a>
                        </li>
                    <?php }?>
                   

                </ul>
            </div>
        </div>
    </nav>

    
    
   <?php }
}
