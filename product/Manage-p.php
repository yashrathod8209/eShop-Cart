<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Add-to-cart'])){
        if(isset($_SESSION['cart'])){
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('ProductName'=>$POST['ProductName'],'ProductPrise'=>$POST['ProductPrise']);
        }else{
            $_SESSION['cart'][0]=array('ProductName'=>$POST['ProductName'],'ProductPrise'=>$POST['ProductPrise']);
            print_r($_SESSION['cart']);
        }
    }

}


?>