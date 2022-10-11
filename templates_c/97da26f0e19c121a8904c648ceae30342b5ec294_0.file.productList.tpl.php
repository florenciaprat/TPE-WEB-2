<?php
/* Smarty version 4.2.1, created on 2022-10-05 22:44:05
  from 'C:\xampp\htdocs\TPE-WEB2\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dec95d8aea3_83295331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97da26f0e19c121a8904c648ceae30342b5ec294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\productList.tpl',
      1 => 1665002642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633dec95d8aea3_83295331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- tabla de productos -->
<table class="table">
  <thead>
      <tr>
        <th scope="col">Product</th>
        <th scope="col">Milliliters(ml)</th>
        <th scope="col">Price</th>
        <th scope="col">Brand</th>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <tr>
        <th scope="row"><a href="viewProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
" class="mylists" ><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->milliliters;?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->brands;?>
</td>
        <td><a class="btn btn-outline-danger" href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Borrar</a> </td>
        <td><a class="btn btn-outline-success" href="updateTask/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Editar</a></td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
