<?php /* Smarty version Smarty-3.1.21, created on 2015-04-01 12:56:16
         compiled from "templates/userInfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10473151295502b2b5a61252-37833754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e5e4f2205b79b5ea22ccdc110cc1aab8307e81e' => 
    array (
      0 => 'templates/userInfos.tpl',
      1 => 1426241620,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1427795872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10473151295502b2b5a61252-37833754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5502b2b5add458_08943414',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502b2b5add458_08943414')) {function content_5502b2b5add458_08943414($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/register.css" />
    
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>     
    <?php echo '<script'; ?>
 src="js/jquery.elevateZoom-3.0.8.min.js"><?php echo '</script'; ?>
>  
    
</head>

<body>
    <div class="myContainer">
        <?php echo $_smarty_tpl->getSubTemplate ("templates/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
            
<div>
    <div class="register">
    <h1>My infos</h1>
        
            <p>First name : <?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
</p>
            <p>last name : <?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
</p>
            <p>Phone : <?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</p>
            <p>Mail : <?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
</p>
            <p>Password : <?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</p>
            
            <div class="adress" />
                <h2>Facturation address</h2>
                <p>Street : <?php echo $_smarty_tpl->tpl_vars['user']->value['factAddress'];?>
</p>
                <p>City : <?php echo $_smarty_tpl->tpl_vars['user']->value['factCity'];?>
</p>
                <p>Country : <?php echo $_smarty_tpl->tpl_vars['user']->value['factCountry'];?>
</p>
            </div>
            <div class="adress" />
                <h2>Shipping address</h2>
                <p>Street: <?php echo $_smarty_tpl->tpl_vars['user']->value['shipAddress'];?>
</p>
                <p>City: <?php echo $_smarty_tpl->tpl_vars['user']->value['shipCity'];?>
</p>
                <p>Country: <?php echo $_smarty_tpl->tpl_vars['user']->value['shipCountry'];?>
</p>
            </div>

            <form method="post" action="">
                <input type="submit" value="Log Out" name="logOut" class="redButton"/>
            </form>
    </div>
</div>

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
