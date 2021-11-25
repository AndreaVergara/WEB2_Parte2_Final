<?php
/* Smarty version 3.1.39, created on 2021-11-19 14:01:57
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\listBiblioteca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197a0453afef4_33834157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecd775dd6b4e68efcf82dd5944b739c47362d792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\listBiblioteca.tpl',
      1 => 1637326786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6197a0453afef4_33834157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<div class="container">

<table class="table table-hover tabla">
    <thead>
        <tr>
            <th>Libro</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['biblioteca']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
            <tr>
                <td>
                    <a href="viewBook/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
/<?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
/<?php echo $_smarty_tpl->tpl_vars['libro']->value->apellido;?>
"><?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
</a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['libro']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['libro']->value->apellido;?>

                </td>

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
