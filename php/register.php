<?php

    if(isset($_POST) && isset($_POST['firstname']))
    {
        
        $helper = new BDDHelper();
        $sql = "insert into user (`firstname`, `lastname`, `phone`, `mail`, `password`, `factAddress`, `factCity`, `factCountry`, `shipAddress`, `shipCity`, `shipCountry`) VALUES (";
        $sql .= "'". $_POST['firstname'] . "',";
        $sql .= "'". $_POST['lastname']. "',";
        $sql .= "'". $_POST['phone']. "',";
        $sql .= "'". $_POST['mail']. "',";
        $sql .= "'". $_POST['password']. "',";
        $sql .= "'". $_POST['factAddress']. "',";
        $sql .= "'". $_POST['factCity']. "',";
        $sql .= "'". $_POST['factCountry']. "',";
        $sql .= "'". $_POST['shipAddress']. "',";
        $sql .= "'". $_POST['shipCity']. "',";
        $sql .= "'". $_POST['shipCountry'] . "'";
        $sql .= ")";
        
        $id = $helper->insert($sql);
        
        $test = $helper->insert("SELECT LAST_INSERT_ID()");
        $helper->close();
        $test = $test[0]["LAST_INSERT_ID()"];
        
        $_SESSION['userId'] = $test;
        header('Location: ?page=shop');
    }
    else
    {
        $smarty->display("register.tpl");
    }
?>