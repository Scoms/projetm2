<?php /* Smarty version Smarty-3.1.21, created on 2015-04-01 13:21:11
         compiled from "templates/shop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145028060854f781155fc7a6-95757584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e03b2dd3d924fe020425c38a4442525c1b088a' => 
    array (
      0 => 'templates/shop.tpl',
      1 => 1427887099,
      2 => 'file',
    ),
    'efee3d8f5d6934850d09fccc9518c65bd48b9097' => 
    array (
      0 => 'templates/masterPage.tpl',
      1 => 1427886745,
      2 => 'file',
    ),
    'ecccb6f7e3b75a877e20150675b4c82dcc1e56be' => 
    array (
      0 => 'templates/thumbnail.tpl',
      1 => 1427886814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145028060854f781155fc7a6-95757584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_54f781156827a1_72928821',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f781156827a1_72928821')) {function content_54f781156827a1_72928821($_smarty_tpl) {?><!DOCTYPE html>
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

        
        
            
<div class="main">
    <div class="sideMenu">
        <h1>
            SHOP BY
        </h1>
        <h2>CATEGORY</h2>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                <li ><a href="?page=shop&category=<?php echo $_smarty_tpl->tpl_vars['category']->value['label'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['category']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value["label"];?>
 (<?php echo $_smarty_tpl->tpl_vars['category']->value["count"];?>
)</a>  </li>
            <?php } ?>
            <li><a href="?page=shop" >All</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="searchBanner">
            <div class="top">
                <h1>VULPUTATE ADIPISCING</h1>
                <p>Hide Option <span class="glyphicon glyphicon-chevron-down"></span></p>
            </div>
            <div class="bottom">
                <img src="package/img-export/stange.png" />
                <div class="options">
                    <div>
                        <p>Show</p>
                        <input placeholder="12 per page"/>
                    </div>
                    <div>
                        <p>Sort by</p>
                        <select id="sortOption">
                            <option id="none"></option>
                            <option id="sortPrice" value="price">Price</option>
                            <option id="sortName" value="name">Name</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>    
                <?php /*  Call merged included template "templates/thumbnail.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '145028060854f781155fc7a6-95757584');
content_551bd4a7bb2f21_71687937($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "templates/thumbnail.tpl" */?>
            <?php } ?>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    
    
        $(document).ready(function(){
            $('#sortOption option[value="'+getUrlParameter('sortBy')+'"]').prop('selected', true);
            
            var selected = $("#sortOption value:price");
            //alert(selected);
            
            $( "#sortOption option:selected" ) ;
        });
                                               
        $("#sortOption").change( function(){
            var sort = $( "#sortOption option:selected" ).val();
            window.location = "?page=shop&sortBy="+sort + "&category=" +getUrlParameter('category')+"&straightSearch="+ $('#straightSearch').val() ;
        }
                            
        );
    
    function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
} 
<?php echo '</script'; ?>
>

        
        
        <?php echo $_smarty_tpl->getSubTemplate ("templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2015-04-01 13:21:11
         compiled from "templates/thumbnail.tpl" */ ?>
<?php if ($_valid && !is_callable('content_551bd4a7bb2f21_71687937')) {function content_551bd4a7bb2f21_71687937($_smarty_tpl) {?>
<div class="mythumbnail <?php echo $_smarty_tpl->tpl_vars['product']->value['class'];?>
" id="th_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
    <div class="picture">
        <img id="zoomHover" src ="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" class="zoom" data-zoom-image="img/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
"//>
        <input value="QUICK SHOP" type="button"/>
    </div>
    <img class="pictureShadow" src="package/img-export/thumbnail_bottom.png">
    
    <div class="text">
        <div id="th_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
_name"><?php echo $_smarty_tpl->tpl_vars['product']->value["name"];?>
</div>
        <?php echo $_smarty_tpl->tpl_vars['product']->value["description"];?>

    </div>
    <div class="price" id="th_<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
_price">
        $<?php echo $_smarty_tpl->tpl_vars['product']->value["price"];?>

    </div>
    <div class="actions">
            <input id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"  onclick="submit(<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
)" type="button" class="redButton" value="ADD TO CART" />

        <div class="buttons">
            <div>
                <img src="package/img-export/2015---TP-WEB---IHM-export_26.png" />
            </div>
            <div>
                
                <img src="package/img-export/2015---TP-WEB---IHM-export_30.png" />
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    
    function submit(id)
    {
        $.post( "?page=shop", { id: id} );
        $("#cartCount").text( parseInt($("#cartCount").text()) + 1);
        
        swal("good job !","Added to cart");
    }
    
<?php echo '</script'; ?>
><?php }} ?>
