<?php
    $isOK = false;

    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email != "" && $password != "")
    { 
        $helper = new BDDHelper();
        $res = $helper->insert("Select * from user where mail = '$email' AND password = '$password'");
        $_SESSION["userId"] = $res[0]["id"];
        $helper->close();

    }
                       
    if($isOk)
    {
        header('Location: ?page=shop');
    }
    else
    {
        header('Location: ?page=checkout');
    }

?>