<?php
    
    if(count($_POST) > 0)
    {
        unset($_SESSION['userId']);
        header('Location: ?page=shop');
    }
    else
    {
        $helper = new BDDHelper();
        $user = $_SESSION['userId'];

        //temp
        $res = $helper->insert("SELECT * FROM USER WHERE id = ".$user);

        $res = $res[0];
        $smarty->assign("user",$res);

        $smarty->display("userInfos.tpl");
    }
?>