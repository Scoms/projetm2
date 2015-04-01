<?php
    
    if(isset($_SESSION['userId']))
    {
        if(isset($_POST))
        {
            if(isset($_POST['logOut']))
            {
                unset($_SESSION['userId']);
                header('Location: ?page=shop');
            }
        }
    
        require("userInfos.php");    
    }
    else
    {
        if((count($_POST) > 0))
        {
            $type = $_POST['registerType'];

            if($type == "register")
            {
                require("php/register.php");
            }
        }
        else
        {
                $smarty->display("checkout.tpl");   
        }
    }
    
?>