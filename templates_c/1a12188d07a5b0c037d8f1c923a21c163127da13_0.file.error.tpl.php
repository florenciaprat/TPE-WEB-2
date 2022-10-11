<?php
/* Smarty version 4.2.1, created on 2022-10-06 01:27:03
  from 'C:\xampp\htdocs\TPE-WEB2\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e12c7894757_51542459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a12188d07a5b0c037d8f1c923a21c163127da13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\error.tpl',
      1 => 1665012417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633e12c7894757_51542459 (Smarty_Internal_Template $_smarty_tpl) {
?><p> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</p>
<p> <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>

<a href="../brands" class="btn btn-primary">Volver a las marcas</a> <?php }
}
