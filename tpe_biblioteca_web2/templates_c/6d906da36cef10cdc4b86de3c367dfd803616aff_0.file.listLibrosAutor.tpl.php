<?php
/* Smarty version 3.1.39, created on 2021-11-18 15:32:37
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\listLibrosAutor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61966405ea3db0_88672303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d906da36cef10cdc4b86de3c367dfd803616aff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\listLibrosAutor.tpl',
      1 => 1637244922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61966405ea3db0_88672303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Libros del autor</h1>
<div class="container">
    <table class="table table-hover  tabla tablaAncho mx-auto" >
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['librosAutor']->value, 'libro');
$_smarty_tpl->tpl_vars['libro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['libro']->value) {
$_smarty_tpl->tpl_vars['libro']->do_else = false;
?>
                <tr>
                    <td><a href="viewBook/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
/<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
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
