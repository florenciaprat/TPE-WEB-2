<?php
/* Smarty version 4.2.1, created on 2022-10-07 18:43:22
  from 'C:\xampp\htdocs\Skincare\templates\formAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6340572a636e34_00400026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93ff2ac0a2f6696844cdf536637c2a8e8f6d9380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\formAdd.tpl',
      1 => 1665008357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6340572a636e34_00400026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="addProduct" method="POST">
        <div class="formulario"><input placeholder="product name" type="text" name="name" id="name" required></div>
        <div class="formulario"><input placeholder="milliliters" type="number" name="milliliters" id="milliliters" required></div>
        <div class="formulario"><input placeholder="price" type="number" name="price" id="price" required></div>
        <div class="formulario"><select name="brand_ID" id="">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marquita']->value, 'brand');
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
        <div class="formulario"><button class="btn btn-primary"> Add </button></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
