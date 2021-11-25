<?php
/* Smarty version 3.1.39, created on 2021-11-24 20:33:43
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\bookDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ecbd7c40093_34258839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954fdc259547d6c4fa353b518614f860f9532cc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\bookDetail.tpl',
      1 => 1637796777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comentariosList.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ecbd7c40093_34258839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col-sm-3 card mx-auto mt-3 detalleLibro colorFondo colorLetra">
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




    <?php if ((isset($_smarty_tpl->tpl_vars['userRol']->value))) {?>         <div class="col-sm-3 card mx-auto mt-3 detalleLibro colorFondo">
            <h3>Ingrese Comentario</h2>
                <form id="form-comentario">
                    <div class="card-body">
                        <h3 class="card-title"> Puntuación: </h1>

                            <input type="radio" name="puntuacion" value="1" required>
                            <label for="1">1</label>
                            <input type="radio" name="puntuacion" value="2">
                            <label for="2">2</label>
                            <input type="radio" name="puntuacion" value="3">
                            <label for="3">3</label>
                            <input type="radio" name="puntuacion" value="4">
                            <label for="4">4</label>
                            <input type="radio" name="puntuacion" value="5">
                            <label for="5">5</label>

                            <h3 class="card-title"> Comentario: </h1>
                                <textarea class="form-control" name="comentario" id="" cols="10" rows="4"
                                    required></textarea>
                                <input type="submit" class="btn btn-success " value="Comentar">
                    </div>
                </form>
        </div>


    <?php }?>
</div>
<div id="appComentarios" class="<?php echo $_smarty_tpl->tpl_vars['libro']->value->id_libro;?>
/<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['userRol']->value;?>
">
    <?php $_smarty_tpl->_subTemplateRender("file:templates/vue/comentariosList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

<?php echo '<script'; ?>
 type="text/javascript" src="js/app.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
