<?php
/* Smarty version 4.2.1, created on 2022-10-04 23:00:06
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633c9ed6d29a59_55301564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61f5ae1c051e9f6f28a276a2dfdc5fa132a6d8f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\productList.tpl',
      1 => 1664903267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633c9ed6d29a59_55301564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- lista de productos -->
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span>  <a href="viewProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
" class="mylists" ><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a> - <?php echo $_smarty_tpl->tpl_vars['product']->value->milliliters;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value->brands;?>
 -   <a class="btn btn-outline-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Borrar</a> <a class="btn btn-outline-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Actualizar</a></span> 
            
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 
</ul>
<div class="col-md-4">
    <h2>Add product</h2>
    <form class ="form-alta" action="add" method="POST">
        <div class="fomulario"> <input placeholder="product name" type="text" name="name" id="name" required></div>
        <div class="fomulario"> <input placeholder="milliliters" type="number" name="milliliters" id="milliliters" required></div>
        <div class="fomulario"> <input placeholder="price" type="number" name="price" id="price" required></div>

        <div class="addProduct"> <a class="btn btn-outline-danger" href="addProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Add</a></div>
    </form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
