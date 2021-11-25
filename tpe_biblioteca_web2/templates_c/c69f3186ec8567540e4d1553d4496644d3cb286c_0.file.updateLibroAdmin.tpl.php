<?php
/* Smarty version 3.1.39, created on 2021-11-19 21:09:06
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\updateLibroAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61980462c69066_38743158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c69f3186ec8567540e4d1553d4496644d3cb286c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\updateLibroAdmin.tpl',
      1 => 1637352520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61980462c69066_38743158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="card mx-auto mt-3 detalleLibro colorFondo">
    <form action="edicionLibro/<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
" method="POST">
        <div class="card-body">
            <h1 class="card-title"> Título: 
            <input class="form-control" type="text" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->titulo;?>
" required>
            </h1>  
            <p class="card-text"> Sinopsis: 
                <textarea class="form-control" name="sinopsis" id="" cols="50" rows="7"><?php echo $_smarty_tpl->tpl_vars['libro']->value->sinopsis;?>
</textarea>
            </p>
        </div>
        <ul class="list-group list-group-flush">

            <li class="list-group-item border-top colorFondo"> Autor: 
                <select name="autor" class="form-select">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autores']->value, 'autor');
$_smarty_tpl->tpl_vars['autor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['autor']->value) {
$_smarty_tpl->tpl_vars['autor']->do_else = false;
?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['libro']->value->id_autor;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['autor']->value->id_autor;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == $_prefixVariable2) {?> selected <?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['autor']->value->nombre;?>

                            <?php echo $_smarty_tpl->tpl_vars['autor']->value->apellido;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </select>
            </li>

            <li class="list-group-item colorFondo"> Año de publicación: <input type="text" name="anio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['libro']->value->anio;?>
" required></li>
            <li class="list-group-item mx-auto colorFondo"><input type="submit" class="btn btn-success " value="Editar"></li>
            
        </ul>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
