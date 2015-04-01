<?php /* Smarty version Smarty-3.1.21, created on 2015-02-17 12:38:13
         compiled from "templates/panier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29801569154e31704d919e9-41785353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38e72acea0c67cd034aaefd235e266cea800bac' => 
    array (
      0 => 'templates/panier.tpl',
      1 => 1424173092,
      2 => 'file',
    ),
    '8e1a465b33c8b162d78e55a13a86ab2e008d57a3' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1424172116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29801569154e31704d919e9-41785353',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54e31704e20347_35050445',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e31704e20347_35050445')) {function content_54e31704e20347_35050445($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css"/>
<?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>  
</head>
<body>
	<div id="body" class="well">
        
        

    <h1>Mon Panier</h1>

<h2>Transac : 
<div id="transac"></div></h2>

    <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>

    <ul>
        <?php  $_smarty_tpl->tpl_vars['book'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['book']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['book']->key => $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->_loop = true;
?>
                <li> 
                    <?php echo $_smarty_tpl->tpl_vars['book']->value->getTitre();?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value->getPrix();?>
 <?php echo $_smarty_tpl->tpl_vars['book']->value->getDescription();?>

                </li>
        <?php } ?>
    </ul>

    <a value="valider" id="resFulCall" class="btn btn-valider" onClick="resCall()"/> Valider</a>

    <?php echo '<script'; ?>
 type="text/javascript">
        
         function resCall(){
             
            var rootUrl = "http://localhost:8888/m2ilcEnsiie/php/serverRestFul.php/hello/";  
            var myUrl = rootUrl + "a/b/c";
             $.ajax({
                 type: 'GET',
                 url: myUrl,
                 
                 success: function(data){
                     $("#transac").text(data);
                }
             });
         };
        
        
    <?php echo '</script'; ?>
>

    </div>
	<br/>
    
    <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

    <a href="index.php?page=client" class="btn btn-info">Client</a>
    <a href="index.php?page=catalogue" class="btn btn-warning">Catalogue</a>
    <a href="index.php?page=panier" class="btn btn-danger">Panier</a>
</body>
<?php }} ?>
