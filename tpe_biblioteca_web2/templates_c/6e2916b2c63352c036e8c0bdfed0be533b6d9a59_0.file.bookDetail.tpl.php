<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:43:17
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\bookDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61636c85a053c7_33572883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e2916b2c63352c036e8c0bdfed0be533b6d9a59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\bookDetail.tpl',
      1 => 1633905787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61636c85a053c7_33572883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card mx-auto mt-3 detalleLibro colorFondo">
    <div class="card-body">
        <h1 class="card-title"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['libro']->value->sinopsis;?>
</p>
    </div>
    <ul class="list-group list-group-flush ">
        <li class="list-group-item colorFondo colorLetra">Autor: <?php echo $_smarty_tpl->tpl_vars['autor']->value;?>
</li>
        <li class="list-group-item colorFondo colorLetra">Año de publicación: <?php echo $_smarty_tpl->tpl_vars['libro']->value->anio;?>
</li>
    </ul>
   
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
