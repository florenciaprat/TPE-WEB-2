<?php
/* Smarty version 4.2.1, created on 2022-10-05 22:14:43
  from 'C:\xampp\htdocs\TPE-WEB2\templates\brandList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633de5b3a316b6_72089602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6847b344cc4f28a0d80f92ce31f56a0d3229652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\brandList.tpl',
      1 => 1665000771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633de5b3a316b6_72089602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- tabla de marcas -->
<table class="table">
  <thead>
      <tr>
        <th scope="col">Brand</th>
        <th scope="col">Country</th>
        <th scope="col">Foundation</th>
        <th scope="col">Website</th>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cafe']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
        <tr>
        <th scope="row"><a href="viewBrandProducts/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
" class="mylists"> <?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
 </a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->country;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->foundation;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['brand']->value->website;?>
</td>
        <td><a class="btn btn-outline-danger" href="deleteBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
">Borrar</a> </td>
        <td><a class="btn btn-outline-success" href="updateBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
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
