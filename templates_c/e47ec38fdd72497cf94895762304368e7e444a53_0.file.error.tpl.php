<?php
/* Smarty version 4.2.1, created on 2022-10-11 15:57:00
  from 'C:\xampp\htdocs\Skincare\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6345762c72aaa7_48083322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47ec38fdd72497cf94895762304368e7e444a53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\error.tpl',
      1 => 1665012417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6345762c72aaa7_48083322 (Smarty_Internal_Template $_smarty_tpl) {
?><p> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</p>
<p> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>

<a href="../brands" class="btn btn-primary">Volver a las marcas</a> <?php }
}
