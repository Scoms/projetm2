<?php /* Smarty version Smarty-3.1.21, created on 2015-03-11 10:49:36
         compiled from "templates/catalogue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178612288755000fb05b8f88-19177879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e81e42fda3ef6e15e22c5e836bae07c70d88650' => 
    array (
      0 => 'templates/catalogue.tpl',
      1 => 1424167904,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1425588256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178612288755000fb05b8f88-19177879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55000fb068ebd9_45390335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55000fb068ebd9_45390335')) {function content_55000fb068ebd9_45390335($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <!-- CSS imports -->
    <link rel="stylesheet" type="text/css"  href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/globalLayout.css" />
    <link rel="stylesheet" type="text/css" href="css/banner.css" />
    <link rel="stylesheet" type="text/css" href="css/subBanner.css" />
    <link rel="stylesheet" type="text/css" href="css/promoBanner.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/sideMenu.css" />
    <link rel="stylesheet" type="text/css" href="css/container.css" />
    <link rel="stylesheet" type="text/css" href="css/thumbnail.css" />
    <link rel="stylesheet" type="text/css" href="css/checkout.css" />
    <link rel="stylesheet" type="text/css" href="css/shoppingCart.css" />
    
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>  
</head>

<body>
    <div class="myContainer">
        <?php echo $_smarty_tpl->getSubTemplate ("templates/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
            

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

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
