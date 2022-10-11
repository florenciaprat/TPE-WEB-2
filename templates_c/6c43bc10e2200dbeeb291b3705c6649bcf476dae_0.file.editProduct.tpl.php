<?php
/* Smarty version 4.2.1, created on 2022-10-06 16:15:05
  from 'C:\xampp\htdocs\TPE-WEB2\templates\editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ee2e9e89b58_13468841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c43bc10e2200dbeeb291b3705c6649bcf476dae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\editProduct.tpl',
      1 => 1665065703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633ee2e9e89b58_13468841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="editProduct" method="POST">
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
