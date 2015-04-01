<!DOCTYPE html>
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

    
    <script src="js/jquery.js"></script>     
    <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>    
    <script src="js/sweet-alert.min.js"></script>  

    
</head>

<body>
    <div class="myContainer">
        {include file="templates/banner.tpl"}
        
        {block name="body"}
            {$smarty.block.child}
        {/block}
        
        {include file="templates/footer.tpl"}
    </div>
</body>
