<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    
    <title>Biblioteca</title>
</head>

<body>
<div class="alto">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <div class="container-fluid">
        {if !isset($userRol)||($userRol!= "administrador")}
            <a class="logo" href="home">Biblioteca</a>
        {else}
            <a class="logo" href="homeAdmin">Biblioteca</a>
        {/if}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    
                    {if !isset($userRol)||($userRol!= "administrador")}
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewAuthors">Autores</a>
                        </li>
                    {else}
                        <li class="nav-item">
                            <a class="nav-link" href="homeAdmin">Home</a>
                        </li>
                    {/if}
                    {if !isset($userRol)}
                        <li class="nav-item">

                            <a class="nav-link" href="login">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse">Registrarse</a>
                        </li>
                    {/if}
                    {if isset($userRol) && ($userRol == "administrador")}
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
                            ADMINISTRADOR: {$userName}
                        </span>
                    {/if}
                    {if  isset($userRol) && ($userRol == "usuario")} 
                        <span class="navbar-text">
                            USUARIO: {$userName}
                        </span>
                    {/if}
                    {if isset($userRol)}
                        <li class="nav-item">
                            <a class="nav-link" href="logout">Cerrar Sesión</a>
                        </li>
                    {/if}
                   

                </ul>
            </div>
        </div>
    </nav>

    
    
   