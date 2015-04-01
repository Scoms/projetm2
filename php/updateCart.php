<?php

    $_SESSION["cart"][$_GET ['id']] = $_GET ['val'];

    

    $cartCount = 0;
        foreach($_SESSION["cart"] as $line)
        {
            $cartCount += $line;  
        }
        
        
        $smarty->assign("cartCount",$cartCount);
echo $cartCount;
?>