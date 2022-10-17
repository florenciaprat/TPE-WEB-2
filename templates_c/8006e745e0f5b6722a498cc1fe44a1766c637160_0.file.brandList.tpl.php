<?php
/* Smarty version 4.2.1, created on 2022-10-15 15:54:08
  from 'C:\xampp\htdocs\Skincare\templates\brandList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634abb80e4e494_77761887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8006e745e0f5b6722a498cc1fe44a1766c637160' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\brandList.tpl',
      1 => 1665841815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:addBrand.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634abb80e4e494_77761887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 </div>

<table class="table">
  <thead>
      <tr>
        <th scope="col">Brand</th>
        <th scope="col">Country</th>
        <th scope="col">Foundation</th>
        <th scope="col">Website</th>
        <?php if (!(isset($_SESSION['USER_ID']))) {?> 
          <?php } else { ?>
          <th scope="col">Delete</th>
          <th scope="col">Edit</th>
        <?php }?>
      </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
        <tr>
        <th scope="row"><a href="view-brand-products/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
" class="mylists"> <?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
 </a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->country;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->foundation;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->website;?>
</td>
        <?php if (!(isset($_SESSION['USER_ID']))) {?> 
          <?php } else { ?>
          <td><a class="btn btn-outline-danger" href="delete-brand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
">Delete</a> </td>
          <td><a class="btn btn-outline-success" href="edit-brand-form/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
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
    <?php $_smarty_tpl->_subTemplateRender("file:addBrand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
