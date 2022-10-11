<?php
/* Smarty version 4.2.1, created on 2022-10-03 21:54:54
  from 'C:\xampp\htdocs\TPE-WEB2\PARTE1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b3e0e511981_60099593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc3f869191f8ef422fd05a880ba58e8edec3b33c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\PARTE1\\templates\\header.tpl',
      1 => 1664826888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633b3e0e511981_60099593 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <base href ="'.BASE_URL.'"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="<?php echo BASE_URL;?>
css/styles.css" rel="stylesheet">
        <title>Skincare</title>
        
    </head>
            <body>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Skicare</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                            <a class="nav-link" href="brands">Marcas</a>
                            <a class="nav-link" href="login" >Login</a>
                            <a class="nav-link" href="signin" >Registrarse</a>
                        </div>
                    </div>
                </div>
            </nav>
           
            <?php }
}
