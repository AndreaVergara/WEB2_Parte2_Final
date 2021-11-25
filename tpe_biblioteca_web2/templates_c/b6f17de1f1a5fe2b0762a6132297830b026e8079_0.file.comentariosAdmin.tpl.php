<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:09:13
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\comentariosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ef0493fe3d4_52819586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f17de1f1a5fe2b0762a6132297830b026e8079' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\comentariosAdmin.tpl',
      1 => 1637806148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comentariosListAdmin.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ef0493fe3d4_52819586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="appComentariosDelete" class="container">
    <h1>Comentarios</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/vue/comentariosListAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php echo '<script'; ?>
 type="text/javascript" src="js/comentariosAdmin.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
