<?php
/* Smarty version 3.1.39, created on 2021-10-10 23:52:37
  from 'C:\xampp\htdocs\web2\tpe\tpe_biblioteca\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616360a56d6b90_42518939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56690aab2d470befacddcac923f736721d8f2c51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe\\tpe_biblioteca\\templates\\login.tpl',
      1 => 1633902753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616360a56d6b90_42518939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container  mx-auto mt-3 border p-5 login colorFondo" >
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="verify" method="POST">

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
            <input type="submit" class="btn btn-success" value="Login">
        </div>
        
    </form>
    <h4 class="text-danger"> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>
</div>





<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
