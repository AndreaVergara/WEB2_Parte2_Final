<?php
/* Smarty version 3.1.39, created on 2021-11-18 17:53:59
  from 'C:\xampp\htdocs\tp\Correa_Vergara_Web2_TPE1\tpe_biblioteca_web2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61968527467848_74617100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ddf7c6d48ee7f9e422a28987ace502dff8f421' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp\\Correa_Vergara_Web2_TPE1\\tpe_biblioteca_web2\\templates\\registro.tpl',
      1 => 1637254383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61968527467848_74617100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container  mx-auto mt-3 border p-5 login colorFondo" >
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <p>Comienza a usar Biblioteca. Crea una cuenta. ¡Es gratis!</p>
    <form action="verifyRegistro" method="POST">

        <div class="row">
            <div>
                <label for="" class="form-label"> Email: </label>
            </div>
            <input placeholder="email" class="form-control" type="text" name="email" id="email" required>
        </div>
        <div class="row mt-2">
            <div>
                <label for="" class="form-label"> Contraseña:  </label>
            </div>
            <input placeholder="password"  class="form-control" type="password" name="password" id="password" required>
        </div>
        <div class="row mt-2">
            <input type="submit" class="btn btn-success" value="Registrarte">
        </div>
        
    </form>
    <h4 class="text-danger"> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
