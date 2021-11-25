<?php
/* Smarty version 3.1.39, created on 2021-11-25 08:02:04
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\vue\comentariosListAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f6d2cd35f94_48842520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4a16e4a4ba4dd843cc25f2db70d290e3473844' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\vue\\comentariosListAdmin.tpl',
      1 => 1637837957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619f6d2cd35f94_48842520 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h1 v-if="comentarios.length>0">{{titulo}}</h1>
    
    <div class="card mx-auto mt-3 detalleLibro colorFondo colorLetra" v-for="comentario in comentarios">
        <div class="card-body">
            <p>Fecha: {{comentario.fecha}}<p>
            <h4 class="card-title">Usuario {{comentario.email}} dice:</h4>
            <p class="card-text">{{comentario.comentario}}</p>
        </div>
        <ul class="list-group list-group-flush ">
            <h6 class="list-group-item colorFondo colorLetra">Puntuacion: {{comentario.puntuacion}}/5</h6>
        </ul>
        <div class="mx-auto">
            <button class="btn btn-outline-dark"  v-bind:id="comentario.id_comentario"  name="btnEliminar" >Eliminar</button>
        </div>
    </div>

<?php }
}
