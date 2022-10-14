<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:56:22
  from 'C:\xampp\htdocs\Skincare\templates\editBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349a2c63c6be3_75597544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edd4f7753ba80525dc83856647e6035da8e554e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\editBrand.tpl',
      1 => 1665770176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349a2c63c6be3_75597544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="../edit-brand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
" method="POST">
    <a href="../brands" class="btn btn-primary">Volver a las marcas</a> 
        <div class="formulario"><p>Name: </p><input value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
" type="text" name="name" id="name" required></div>
        <div class="formulario"><p>Country: </p><input value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->country;?>
" type="text" name="country" id="country" required></div>
        <div class="formulario"><p>Foundation: </p><input value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->foundation;?>
" type="number" name="foundation" id="foundation" required></div>
        <div class="formulario"><p>Website: </p><input value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->website;?>
" type="text" name="website" id="website" required></div>

       
        <div class="formulario"><button type="submit" class="btn btn-primary"> Edit </button></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
