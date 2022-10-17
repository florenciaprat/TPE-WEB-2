<?php
/* Smarty version 4.2.1, created on 2022-10-15 15:53:26
  from 'C:\xampp\htdocs\Skincare\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634abb560f32a6_03000018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7fc1bf3d43f43c0a4573ab07944bdc30320e9aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\productList.tpl',
      1 => 1665841961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAdd.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634abb560f32a6_03000018 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
          <?php } else { ?>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
          <?php }?>
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
        <th scope="row"><a href="view-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
" class="mylists" ><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->milliliters;?>
</td>
        <td>$<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->brands;?>
</td>
        <?php if (!(isset($_SESSION['USER_ID']))) {?> 
          <?php } else { ?>
          <td><a class="btn btn-outline-danger" href="delete-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Delete</a> </td>
          <td><a class="btn btn-outline-success" href="edit-product-form/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_ID;?>
">Edit</a></td>
        <?php }?>
        
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php if (!(isset($_SESSION['USER_ID']))) {?> 
  <?php } else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:formAdd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
