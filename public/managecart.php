<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['add_to_cart'])) {
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('cust_id'=>$_SESSION['custid'],'food_id'=>$_POST['f_id']);

            }

            else {
                $_SESSION['cart'][0] = array('cust_id'=>$_SESSION['custid'],'food_id'=>$_POST['f_id']);
                // echo
                
            }
        }
    }
?>