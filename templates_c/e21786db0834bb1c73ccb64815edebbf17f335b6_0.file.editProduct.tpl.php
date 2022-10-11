<?php
/* Smarty version 4.2.1, created on 2022-10-07 22:48:20
  from 'C:\xampp\htdocs\Skincare\templates\editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634090949f9bc2_68511145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21786db0834bb1c73ccb64815edebbf17f335b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\editProduct.tpl',
      1 => 1665175695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634090949f9bc2_68511145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="editProduct" method="POST">
    <a href="../home" class="btn btn-primary">Volver al inicio</a> 
        <div class="formulario"><p>Name: </p><input value="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
" type="text" name="name" id="name" required></div>
        <div class="formulario"><p>Milliliters: </p><input value="<?php echo $_smarty_tpl->tpl_vars['product']->value->milliliters;?>
" type="number" name="milliliters" id="milliliters" required></div>
        <div class="formulario"><p>Price: </p><input value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
" type="number" name="price" id="price" required></div>
        <div class="formulario"><p>Brand: </p><select name="brand_ID" id="">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marca']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                <option class="option" value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="formulario"><button class="btn btn-primary"> Edit </button></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
