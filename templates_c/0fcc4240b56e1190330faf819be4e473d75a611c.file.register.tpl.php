<?php /* Smarty version Smarty-3.1.21, created on 2015-03-31 10:59:52
         compiled from "templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18236880325502a1efbd9045-03140113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fcc4240b56e1190330faf819be4e473d75a611c' => 
    array (
      0 => 'templates/register.tpl',
      1 => 1426373246,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1426415035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18236880325502a1efbd9045-03140113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5502a1efc74903_60821672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5502a1efc74903_60821672')) {function content_5502a1efc74903_60821672($_smarty_tpl) {?><!DOCTYPE html>
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
</head>

<body>
    <div class="myContainer">
        <?php echo $_smarty_tpl->getSubTemplate ("templates/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
            
<div>
    <div class="register">
    <h1>Register</h1>
        <form method="post" action="?page=register">
            <p>First name :</p>
            <input type="text" name="firstname" />
            <p>Last name :</p>
            <input type="text" name="lastname" />
            <p>Phone :</p>
            <input type="text" name="phone" />
            <p>Mail :</p>
            <input type="text" name="mail" />
            <p>Password :</p>
            <input type="password" name="password" />

            <div class="adress" />
                <h2>Facturation address</h2>
                <p>Street</p>
                <input type="text" name="factStreet" />
                <p>City</p>
                <input type="text" name="factCity" />
                <p>Country</p>
                <input type="text" name="factCountry" />
            </div>
            <div class="adress" />
                <h2>Shipping address</h2>
                <p>Street</p>
                <input type="text" name="shipStreet" />
                <p>City</p>
                <input type="text" name="shipCity" />
                <p>Country</p>
                <input type="text" name="shipCountry" />
            </div>
    
        
            <input type="submit" class="redButton" value="Register" />
    
        </form>
    </div>
</div>

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
