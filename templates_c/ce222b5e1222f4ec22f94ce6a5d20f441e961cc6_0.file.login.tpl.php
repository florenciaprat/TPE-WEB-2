<?php
/* Smarty version 4.2.1, created on 2022-10-04 16:35:48
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c44c4c91bb5_31840258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce222b5e1222f4ec22f94ce6a5d20f441e961cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\login.tpl',
      1 => 1664894094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c44c4c91bb5_31840258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Log In</h2>
            <form class="form-alta" action="verify" method="post">
                <div class="formulario"> <input placeholder="email" type="text" name="email" id="email" required></div>
                <div class="formulario"> <input placeholder="password" type="password" name="password" id="password" required></div>
                <div class="formulario"> <input type="submit" class="btn btn-primary" value="Login"></div>
            </form>
        </div>
    </div>
    <h4 class="alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h4>

</div>


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
