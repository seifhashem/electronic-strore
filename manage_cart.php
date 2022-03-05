<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_post['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {

        }
        else{
            $_SESSION['cart'][0]=array('ProductName'=>$_POST['ProductName'],'ProductPrice'=>$_POST['ProductPrice'],'Quantity'=>1);
            print_r($_SESSION['cart']);
        }
    }
}
?>