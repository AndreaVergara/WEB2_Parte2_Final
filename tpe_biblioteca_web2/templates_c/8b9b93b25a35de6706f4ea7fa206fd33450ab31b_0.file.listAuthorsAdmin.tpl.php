<?php
/* Smarty version 3.1.39, created on 2021-10-11 00:18:53
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\listAuthorsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616366cd059211_87750370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b9b93b25a35de6706f4ea7fa206fd33450ab31b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\listAuthorsAdmin.tpl',
      1 => 1633904330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerAdmin.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616366cd059211_87750370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="container">
    <table class="table table-hover tabla">
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['idAutor']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?>
                    <tr>
                        <form action="updateAuthorSave/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
" method="POST">
                            <td>
                                <div class="d-flex justify-content-start col-md-8">
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
" required>
                                    <input type="text" class="form-control" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
" required>
                                </div>
                            </td>
                            <td class="d-flex justify-content-end">
                            <div class="d-flex justify-content-around anchoCeldaBtn" >
                                <input type="submit" class="btn btn-outline-success" value="Guardar">
                            </div>
                            </td>
                        </form>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>

                        </td>
                        <td class="d-flex justify-content-end">
                        <div class="d-flex justify-content-around anchoCeldaBtn" >
                            <a href="updateAuthor/<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
" class="btn btn-outline-dark">Editar</a>
                            <input type="button" id="botonAutor<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
" name="<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
"
                                class="btn btn-outline-dark" value="Borrar">
                        </div>
                        </td>
                    </tr>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </tbody>
    </table>
</div>

<div class="container border p-5 colorFondo tablaAncho">
    <h2>Agregar Nuevo Autor </h2>

    <form action="addAutor" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="col">
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
            </div>
        </div>
        <div class="pt-4">
            <input type="submit" class="btn btn-success" value="Agregar">
        </div>
    </form>
</div>


<dialog id="deleteConfirm" class="border border-danger">
    <p>Advertencia. Al borrar el autor se borrarán todos sus libros. </p>
    <div>
        <input type="button" id="btn-cancelar" class="btn btn-secondary" value="Cancelar">
        <a href="deleteAuthor/" id="btnBorrardoDefinitivo" class="btn btn-danger">Borrar</a>
        
    </div>
</dialog>


<?php echo '<script'; ?>
 type="text/javascript" src="js/main.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
