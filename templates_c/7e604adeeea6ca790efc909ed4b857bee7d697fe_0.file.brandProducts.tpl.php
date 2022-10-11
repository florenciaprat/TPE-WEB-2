<?php
/* Smarty version 4.2.1, created on 2022-10-03 21:14:43
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\brandProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b34a3753b66_56644612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e604adeeea6ca790efc909ed4b857bee7d697fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\brandProducts.tpl',
      1 => 1664824349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b34a3753b66_56644612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span> <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 </span> 
            
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
</ul>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
