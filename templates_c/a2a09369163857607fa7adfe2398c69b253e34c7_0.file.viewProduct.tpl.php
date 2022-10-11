<?php
/* Smarty version 4.2.1, created on 2022-10-03 21:41:34
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\viewProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b3aee218b45_71502103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a09369163857607fa7adfe2398c69b253e34c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\viewProduct.tpl',
      1 => 1664826088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633b3aee218b45_71502103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card" style="width: 18rem;">
  <img src="../img/skincare.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h5>
    <p class="card-text">Cantidad(ml):<?php echo $_smarty_tpl->tpl_vars['product']->value->milliliters;?>
</p> 
    <p class="card-text">Precio: $<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</p>
    <p class="card-text">Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->brands;?>
</p>

    <a href='home' class="btn btn-primary">Volver al inicio</a> 
    
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
