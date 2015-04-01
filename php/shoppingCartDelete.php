<?php


    $id = $_GET["id"];
    unset($_SESSION['cart'][$id]);

    foreach($_SESSION["cart"] as $line)
        {
            $cartCount += $line;  
        }

    $cartCount = 0;
        foreach($_SESSION["cart"] as $line)
        {
            $cartCount += $line;  
        }


    echo $cartCount;
?>