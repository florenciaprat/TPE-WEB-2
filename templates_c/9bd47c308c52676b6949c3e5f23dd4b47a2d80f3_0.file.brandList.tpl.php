<?php
/* Smarty version 4.2.1, created on 2022-10-03 21:28:17
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\brandList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b37d1768dd0_65484956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd47c308c52676b6949c3e5f23dd4b47a2d80f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\brandList.tpl',
      1 => 1664825255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b37d1768dd0_65484956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- lista de marcas -->
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cafe']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
        <span><a href="viewBrandProducts/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
" class="mylists"> <?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
 </a> - <?php echo $_smarty_tpl->tpl_vars['brand']->value->country;?>
 - <?php echo $_smarty_tpl->tpl_vars['brand']->value->foundation;?>
 - <?php echo $_smarty_tpl->tpl_vars['brand']->value->website;?>
 - <a class="btn btn-outline-danger" href="deleteBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
">Borrar</a> <a class="btn btn-outline-success" href="updateBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->brand_ID;?>
">Actualizar</a> </span>
            
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
