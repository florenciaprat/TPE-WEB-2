<?php
/* Smarty version 4.2.1, created on 2022-10-14 19:16:50
  from 'C:\xampp\htdocs\Skincare\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349998260cbf6_83513483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5ab5ea98b7e9b7c5ab9834926d31bb2aa60faa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Skincare\\templates\\header.tpl',
      1 => 1665767806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349998260cbf6_83513483 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a class="navbar-brand" href="home">Skincare</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                            <a class="nav-link" href="brands">Brands</a>
                           
                            
                            <?php if (!(isset($_SESSION['USER_ID']))) {?>
                                <a class="nav-link" href="login" >Login</a>
                              <?php } else { ?>
                                <a class="nav-link" href="form" >Add product</a>
                                <a class="nav-link" href="show-form" >Add brand</a>

                                <a class="nav-link" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>                 
                              <?php }?>
            
                        </div>
                    </div>
                </div>
            </nav>
           
            <?php }
}
