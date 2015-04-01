<?php
    
    //Get from database
    $helper = new BDDHelper();
    $products = $helper->selectProducts($_CATEGORY, $_SORT, $_SSEARCH);    
    $categories = $helper->CategoriesCount();
    $helper->close();

    //Render processing
    $i =1;
    $temp = array();
    foreach($products as $product)
    {
        $classe = $i % 3 == 0 ? "endRow" : "";
        $product["class"] = $classe;
        
        array_push($temp,$product);
        $i++;
    }
    $products = $temp;

    $temp = array();
    foreach($categories as $cat)
    {
        $classe = $cat['label'] == $_CATEGORY ? "highlight" : "";
        $cat["class"] = $classe;
        array_push($temp,$cat);
    }

    //Shopping cart update
    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $cart = $_SESSION["cart"];

        if(!isset($cart))
        {
            $cart = array();
        }
        
        $final = true;
        $cart[$id] = $cart[$id] + 1;
            
        $cartCount = 0;
        foreach($_SESSION["cart"] as $line)
        {
            $cartCount += $line;  
        }
        
        $cartCount++;
        $_SESSION["cart"] = $cart;
        
        $smarty->assign("cartCount",$cartCount);
    }


    $categories = $temp; 
    $smarty->assign("categories",$categories);
    $smarty->assign("products", $products);
	$smarty->display("shop.tpl");
?>
