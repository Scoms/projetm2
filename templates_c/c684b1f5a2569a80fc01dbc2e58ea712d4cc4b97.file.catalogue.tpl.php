<?php /* Smarty version Smarty-3.1.21, created on 2015-02-17 11:24:48
         compiled from "templates/catalogue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195136019854e30bfe8201d2-41124564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c684b1f5a2569a80fc01dbc2e58ea712d4cc4b97' => 
    array (
      0 => 'templates/catalogue.tpl',
      1 => 1424167904,
      2 => 'file',
    ),
    '8e1a465b33c8b162d78e55a13a86ab2e008d57a3' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1424168687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195136019854e30bfe8201d2-41124564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54e30bfe89f424_55549040',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e30bfe89f424_55549040')) {function content_54e30bfe89f424_55549040($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>
	<div id="body" class="well">
        
        

    <h1>Catalogue</h1>

    <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>

    <ul>
        <?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allBooks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->_loop = true;
?>
            <form action="index.php?action=ajoutPanier&page=catalogue" method="post">
                <li> 
                    <?php echo $_smarty_tpl->tpl_vars['book']->value->getTitre();?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value->getPrix();?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value->getDescription();?>

                </li>
                <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['book']->value->getId();?>
"/>
                <input value="ajouter au panier" type="submit" class="btn btn-primary" />  
            </form>
        <?php } ?>
    </ul>

    </div>
	<br/>
    
    <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

    <a href="index.php?page=client" class="btn btn-info">Client</a>
    <a href="index.php?page=catalogue" class="btn btn-warning">Catalogue</a>
    <a href="index.php?page=panier" class="btn btn-danger">Panier</a>
</body>
<?php }} ?>
