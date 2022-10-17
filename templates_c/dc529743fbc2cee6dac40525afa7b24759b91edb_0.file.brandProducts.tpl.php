<?php
/* Smarty version 4.2.1, created on 2022-10-15 16:04:00
  from 'C:\xampp\htdocs\Skincare\templates\brandProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634abdd08e6d45_29096414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc529743fbc2cee6dac40525afa7b24759b91edb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\brandProducts.tpl',
      1 => 1665841689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634abdd08e6d45_29096414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
<div> <h3>Los productos de <?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
 </h3> </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>
<a href="../brands" class="btn btn-outline-success" >Volver a las marcas</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
