<?php
/* Smarty version 4.2.1, created on 2022-10-07 18:27:59
  from 'C:\xampp\htdocs\TPE-WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340538fdd7151_59833998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e5ea5f1f88003b562d2efac196e817aae4b4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\login.tpl',
      1 => 1665160020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6340538fdd7151_59833998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Log In</h2>
            <form class="form-alta" action="validate" method="post">
                <div class="formulario"> <input placeholder="email" type="text" name="email" id="email" required></div>
                <div class="formulario"> <input placeholder="password" type="password" name="password" id="password" required></div>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
                    <div class="alert alert-danger mt-3">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>
        
                <div class="formulario"> <input type="submit" class="btn btn-primary" value="Login"></div>
            </form>
        </div>
    </div>
   

</div>


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
