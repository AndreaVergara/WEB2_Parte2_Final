<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:55:31
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61636f637df7f2_44958619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac941fbe58e9b76574a9055182229352585ba972' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\headerAdmin.tpl',
      1 => 1633906518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61636f637df7f2_44958619 (Smarty_Internal_Template $_smarty_tpl) {
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
