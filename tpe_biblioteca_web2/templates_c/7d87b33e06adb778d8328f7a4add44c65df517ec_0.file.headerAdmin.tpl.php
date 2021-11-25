<?php
/* Smarty version 3.1.39, created on 2021-10-13 23:28:56
  from 'C:\xampp\htdocs\tpe_biblioteca_web2\templates\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61674f980c69b9_09037297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d87b33e06adb778d8328f7a4add44c65df517ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_biblioteca_web2\\templates\\headerAdmin.tpl',
      1 => 1633892118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61674f980c69b9_09037297 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Biblioteca</title>
</head>

<body>
<div class="alto">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="logo" href="homeAdmin">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="homeAdmin">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="authorsAdmin">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Cerrar Sesión</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav><?php }
}
