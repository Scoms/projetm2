<?php /* Smarty version Smarty-3.1.21, created on 2015-04-01 13:17:04
         compiled from "templates/shoppingCartAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161280177551a63e1c2f227-02569880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c39ee7d252de6f06d4c681bb7fd68f19b6f76b75' => 
    array (
      0 => 'templates/shoppingCartAjax.tpl',
      1 => 1427882715,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1427886745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161280177551a63e1c2f227-02569880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_551a63e1c76b95_28828904',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a63e1c76b95_28828904')) {function content_551a63e1c76b95_28828904($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="css/sweet-alert.css" />

    
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>     
    <?php echo '<script'; ?>
 src="js/jquery.elevateZoom-3.0.8.min.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="js/sweet-alert.min.js"><?php echo '</script'; ?>
>  

    
</head>

<body>
    <div class="myContainer">
        <?php echo $_smarty_tpl->getSubTemplate ("templates/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
            

<div id="cartContainer">

</div>


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        Load();
    });
    
    function DeleteAndReload(id)
    {
        $.ajax({
          url: "?page=shoppingCartDelete&id=" + id,
        }).done(function(data) {
            $("#cartCount").text(data);
        }); 
        Load();       
        Load();

    }
    
    function Load()
    {
          $.ajax({
          url: "http://localhost:8888/ProjetM2/?page=shoppingCartFunc",
          context: document.body
        }).done(function(data) {
              $("#cartContainer").html(data);
        }); 
    }   //href="?page=shoppingCart&id=<?php echo $_smarty_tpl->tpl_vars['pro']->value['id'];?>
&action=all"
    
<?php echo '</script'; ?>
>

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
