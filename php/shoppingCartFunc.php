<?php
	if (isset ($_GET ['id']))
    {
        $id = $_GET['id'];
        
        if($_GET['action'] == 'all')
        while(($key = array_search($id, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$id]);
        }
        
        $smarty->assign("cartCount",count($cart));
    } 

    
    $helper = new BDDHelper();
    
    

    $products = $helper->findProducts(array_keys($_SESSION["cart"]));
    $helper->close();

    
    
    $smarty->assign("products",$products);
    $smarty->assign("qtys",$_SESSION["cart"]);
    $smarty->display("shoppingCart.tpl");
?>  