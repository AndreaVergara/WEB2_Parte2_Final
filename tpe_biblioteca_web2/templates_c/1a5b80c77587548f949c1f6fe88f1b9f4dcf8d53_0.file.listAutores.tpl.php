<?php
/* Smarty version 3.1.39, created on 2021-10-10 23:50:03
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\listAutores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6163600ba9b5b5_67532285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5b80c77587548f949c1f6fe88f1b9f4dcf8d53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\listAutores.tpl',
      1 => 1633902600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6163600ba9b5b5_67532285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
 
<div class="container">
    <table class="table table-hover tabla tablaAncho mx-auto" >
        <thead>
        <tr>
            <th>Autores</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>
                <tr>
                    <td><a href="viewBooksOfAuthor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
/<?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
"><?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
  </table>
</div>

    
    

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
