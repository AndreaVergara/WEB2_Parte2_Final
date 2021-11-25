<?php
/* Smarty version 3.1.39, created on 2021-09-29 23:49:41
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\listBilioteca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154df753e69e7_99214098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2acb5b2e2fbe2367f8e7dbbf143d1cc9adceae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\listBilioteca.tpl',
      1 => 1632951862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6154df753e69e7_99214098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['biblioteca']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <li>

                <a href = "viewBook/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</a>
                <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['libro']->value->apellido;?>
 


            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    </ul>

    

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
