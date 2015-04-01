<?php /* Smarty version Smarty-3.1.21, created on 2015-02-17 12:22:49
         compiled from "templates/accueil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103387088654c75f04969311-93502790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10adb23f19d4895cb46755e47d7f36a792383464' => 
    array (
      0 => 'templates/accueil.tpl',
      1 => 1424167452,
      2 => 'file',
    ),
    '8e1a465b33c8b162d78e55a13a86ab2e008d57a3' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1424172116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103387088654c75f04969311-93502790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54c75f04a999e4_13737180',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c75f04a999e4_13737180')) {function content_54c75f04a999e4_13737180($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css"/>
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>  
</head>
<body>
	<div id="body" class="well">
        
        
Page d'accueil <?php echo $_smarty_tpl->tpl_vars['page']->value;?>


    </div>
	<br/>
    
    <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

    <a href="index.php?page=client" class="btn btn-info">Client</a>
    <a href="index.php?page=catalogue" class="btn btn-warning">Catalogue</a>
    <a href="index.php?page=panier" class="btn btn-danger">Panier</a>
</body>
<?php }} ?>
