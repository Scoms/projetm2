<?php /* Smarty version Smarty-3.1.21, created on 2015-03-31 15:15:59
         compiled from "templates/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20964748754f854d60463b3-77013133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b5818da7a8f83d21a5692f3adeb6a6b6efe595' => 
    array (
      0 => 'templates/checkout.tpl',
      1 => 1426373509,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1427795872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20964748754f854d60463b3-77013133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54f854d60471c1_88745321',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f854d60471c1_88745321')) {function content_54f854d60471c1_88745321($_smarty_tpl) {?><!DOCTYPE html>
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

        
        
            
<div class="main">
    <div class="sideMenu">
        <h1>
            CHECKOUT PROGRESS
        </h1>
        <ul>
            <li>Billing Address</li>
            <li>Shipping Address</li>
            <li>Shipping Method</li>
            <li>Payment Method</li>
        </ul>
    </div>

    
    <div class="container">
        <div class="checkout">
            <div class="currentStep">
                <div class="numberedTitle-red numberedTitle">  
                    <span>1</span>
                    <h2 >CHECKOUT METHOD</h1>
                </div>
                <h2>Checkout As A Guest or Register</h2>
                <p>Register With us for futher convienience</p>
                
                <form method="post" action="" />
                    <div class="row">
                        <input type="radio" value="guest" name="registerType" /><label>Checkout As A Guest</label>
                    </div>
                    <div class="row">
                        <input type="radio" value="register" name="registerType" /><label>Register</label> 
                    </div>
                    <p>Register and Save Time!</p>
                    <p>Register With us for futher convienience</p>
                    <p>> Checkout As A Guest</p>
                    <p>> Register</p>
                    <div class="block">
                        <input type="submit" class="redButton" value="CONTINUE"/>
                    </div>
                </form>
            </div>
            <div class="numberedTitle">  
                <span>2</span>
                <h2>BILLING INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>3</span>
            <h2>SHIPPING INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>4</span>
            <h2>SHIPPING METHOD</h2>
            </div>
            <div class="numberedTitle">  
                <span>5</span>
            <h2>PAYMENT INFORMATION</h2>
            </div>
            <div class="numberedTitle">  
                <span>6</span>
            <h2>ORDER REVIEW</h2>
            </div>
        </div>
        
        
        <div class="login">
            <form method="post" action="?page=login">
                <h2 >Login</h2>
                <p>Already registererd? Please login bellow :</p>
                <h2 >Email Address:</h2>
                <input type="text" name="email">
                <h2>Password:</h2>
                <input type="password" name="password"/>
                <div class="asterisk">* Required field</div>
                <input type="submit" class="redButton" value="LOG IN"/>         
            </form>
        </div>
    </div>
</div>

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
