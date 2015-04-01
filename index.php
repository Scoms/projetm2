<?php
	// LIBS
	require 'vendor/autoload.php';
    require("php/BDDHelper.php");
    session_start();  

    //session_destroy();
	// SMARTY
	$smarty = new Smarty ();
	
	$smarty->template_dir = 'templates/';
	$smarty->compile_dir = 'templates_c/';
	$smarty->config_dir = 'configs/';
	$smarty->cache_dir = 'cache/';

	// PROPEL
	Propel::init ("build/conf/librairie-conf.php");

    $path = __DIR__. "/build/classes" . PATH_SEPARATOR . get_include_path ();
	set_include_path (__DIR__. "/build/classes" . PATH_SEPARATOR . get_include_path ());

    // FRONT CONTROLEUR	
	if (isset ($_GET ['page'])) $page = $_GET ['page']; else $page = "shop";
	if (isset ($_GET ['action'])) $action = $_GET ['action']; else $action = "";
	if (isset ($_GET ['category'])) $_CATEGORY = $_GET ['category']; else $_CATEGORY = "all";
	if (isset ($_GET ['sortBy'])) $_SORT = $_GET ['sortBy']; else $_SORT = null;
	if (isset ($_GET ['straightSearch'])) $_SSEARCH = $_GET ['straightSearch']; else $_SSEARCH = null;
		
    $cartCount = 0;
    foreach($_SESSION["cart"] as $line)
    {
        $cartCount += $line;  
    }

    $smarty->assign("cartCount",$cartCount);


    $smarty->assign("userName", "welcome customer (log in)");
   
    
    //Get user 
    if(isset($_SESSION['userId']))
    {
        $helper = new BDDHelper();
        $id = $_SESSION['userId'];
        $res = $helper->insert("Select * from user where id = $id ");
        $helper->close();
        $uname = $res[0]['firstname'] . " ". $res[0]['lastname'];
        $smarty->assign("userName", $uname);
    }

    require("php/$page.php");
?>