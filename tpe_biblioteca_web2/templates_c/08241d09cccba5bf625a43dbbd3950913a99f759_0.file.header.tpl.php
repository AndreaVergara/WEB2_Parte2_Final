<?php
/* Smarty version 3.1.39, created on 2021-10-13 23:22:05
  from 'C:\xampp\htdocs\tpe_biblioteca\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61674dfd554650_63554348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08241d09cccba5bf625a43dbbd3950913a99f759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_biblioteca\\templates\\header.tpl',
      1 => 1633892022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61674dfd554650_63554348 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Biblioteca</title>
</head>

<body>
<div class="alto">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <div class="container-fluid">
            <a class="logo" href="home">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viewAuthors">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Iniciar Sesión</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    
    
   <?php }
}
