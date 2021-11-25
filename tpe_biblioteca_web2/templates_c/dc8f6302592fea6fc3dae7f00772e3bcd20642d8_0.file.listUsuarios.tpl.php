<?php
/* Smarty version 3.1.39, created on 2021-11-23 14:07:13
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\listUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ce781a14690_63325520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc8f6302592fea6fc3dae7f00772e3bcd20642d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\listUsuarios.tpl',
      1 => 1637672831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ce781a14690_63325520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
<p class="container bg-light text-danger">ADVERTENCIA: Al borrar un usuario se borrarán todos sus comentarios.</p>


    <table class="table table-hover tabla">
    
        <thead>
            <tr>
                <th>id_Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
 
                    </td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value->esAdministrador == 1) {?>  
                        Administrador
                    <?php } else { ?>
                        Usuario
                    <?php }?>
                    </td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['userName']->value != $_smarty_tpl->tpl_vars['usuario']->value->email) {?>
                        <a href="cambiarRol/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
" class="btn btn-outline-dark">Cambiar Rol</a>
                        <a href="deleteUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
" class="btn btn-outline-dark">Eliminar Usuario</a> 
                    <?php }?>
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
