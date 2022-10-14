<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:52:35
  from 'C:\xampp\htdocs\Skincare\templates\addBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a1e378e694_37242908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8004a35484d72fc4b55489c2920d928367cabf73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\addBrand.tpl',
      1 => 1665769943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349a1e378e694_37242908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="add-brand" method="POST">
        <div class="formulario"><input placeholder="brand name" type="text" name="name" id="name" required></div>
        <div class="formulario"><input placeholder="country" type="text" name="country" id="country" required></div>
        <div class="formulario"><input placeholder="foundation" type="number" name="foundation" id="foundation" required></div>
        <div class="formulario"><input placeholder="website" type="text" name="website" id="website" required></div>
        <div class="formulario"><button class="btn btn-primary"> Add </button></div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
