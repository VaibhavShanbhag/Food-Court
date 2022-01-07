<?php
    session_start();
    include("../private/dbconnect.php");

    $sql = "select * from `customer` where `cust_id`= '{$_SESSION['custid']}'";
    $run = mysqli_query($conn,$sql);
    $cust = mysqli_fetch_assoc($run);

    date_default_timezone_set("Asia/Calcutta");
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Order Summary | Food Court</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

        :root {
            --red: #ff3838;
        }

        * {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            transition: all .2s linear;
            list-style: none;
        }

        *::selection {
            background: var(--red);
            color: #fff;
        }

        html {
            font-size: 62.5%;
            /* overflow-x: hidden; */
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            background: #fff;
            padding: 2rem 9%;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            text-align: center;
        }

        header .logo {
            font-size: 2.5rem;
            font-weight: bolder;
            color: #666;
            text-decoration: none;
            width: 81%;
        }

        header .logo i {
            padding-right: .5rem;
            color: var(--red);
        }


        header .navbar a {
            font-size: 2rem;
            margin-left: 2rem;
            color: #666;
        }

        header .navbar a:hover {
            color: var(--red);
        }

        header .btn2 {
            background-color: white;
        }

        .btn {
            display: inline-block;
            padding: .8rem 3rem;
            border: .2rem solid var(--red);
            color: var(--red);
            cursor: pointer;
            font-size: 1.7rem;
            border-radius: .5rem;
            position: relative;
            overflow: hidden;
            z-index: 0;
            margin-top: 1rem;
            background-color: var(--red);
            color: white;
        }

        .btn:hover {
            -moz-box-shadow: 3px 3px 5px 6px #ccc;
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;
            box-shadow: 3px 3px 5px 6px #ccc;
            color: white;
        }

        .container {
            max-width: 60%;
            height: 100%;
            margin: 20px auto;
            transform: translate3d(0, 0, 10px);
            box-shadow: 3px 3px 10px black;
            font-size: 15px;
            padding: 20px 0;
        }

        .container span {
            font-weight: bold;
        }

        .container h2,
        p {
            text-align: center;
            margin-top: 5px;
        }

        .container .oid {
            margin-top: 50px;
        }

        .custdetails {
            margin: 15px;
            padding: 10px;
            box-shadow: 2px 2px 12px gray;
        }

        .custdetails0 {
            display: flex;
        }

        .custdetails .custdetails1 {
            width: 100%;
            display: flex;
            margin: 10px 0 0 5px;
        }

        .custdetails .custdetails1 {
            display: flex;
            flex-direction: column;
            width: 230px;
        }

        .custdetails2 {
            justify-content: flex-end;
            margin-left: 30%;
        }

        .items {
            margin: 40px 30px 30px 30px;
        }

        table {
            width: 100%;
        }

        table td {
            height: 40px;
            text-align: center;
            border-bottom: 1px solid black;
        }

        .price {
            margin: 50px 30px 50px 30px;
        }

        .pricetable {
            margin-top: 20px;
        }

        .pricetable td {
            border-bottom: none;
            height: 25px;
            text-align: left;
        }

        .pricetable .final {
            margin-top: 40px;

        }

        .pricetable .final td {
            border-top: 1px solid black;
            border-bottom: none;
        }

        .payment {
            font-weight: bold;
            font-size: 20px;
        }

        .delivery-image {
            display: flex;
            margin: 100px 0 0 0;
            justify-content: center;
        }

        .delivery-image img {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .message p {
            text-align: center;
            margin-top: 5px;
            font-size: 17px;
            font-weight: bold;
            color: #808080;
        }
    </style>
</head>

<body>
    <?php
        $sql = "select * from `order` where `order_id`= '{$_SESSION['custid']}'";
        $run = mysqli_query($conn,$sql);
        $order = mysqli_fetch_assoc($run);
    ?>
    <header>
        <a href="index.php" class="btn">Home</a>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
    </header>
    <div class="delivery-image">
        <img src="images/delivery.gif" alt="" width="250">
    </div>
    <div class="message">
        <p class="message">Super! Your Order will be Delivered Shortly</p>
    </div>
    <div class="container">
        <h2>Order Summary</h2>
        <p class="oid"><span>ORDER ID:</span> #403601-
            <?php echo $order['order_id'] ?>
        </p>
        <p class="odate"><span>ORDER PLACED ON:</span>
            <?php echo date('d-m-Y H:i:s A'); ?>
        </p>

        <div class="custdetails">
            <h3>Delivery Details:</h3>
            <div class="custdetails0">
                <div class="custdetails1">
                    <p class="name">
                        <?php echo $cust['name'] ?>
                    </p>
                    <p class="address">
                        <?php echo $cust['address'] ?>
                    </p>
                </div>
                <div class="custdetails2">
                    <p class="email">
                        <?php echo $cust['email'] ?>
                    </p>
                    <p class="contact">
                        <?php echo $cust['mobile_number'] ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="items">
            <h3>Items:</h3>
            <div class="item1">
                <table>
                    <tr>
                        <th>Item name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <?php
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $query = "SELECT * FROM `food` WHERE `food_id` = $value[food_id]";
                                $run = mysqli_query($conn, $query);
                                $data = mysqli_fetch_assoc($run);
                                ?>
                                <tr>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['price'] ?></td>
                                <td><?php echo $value['qty'] ?></td>
                                <td><?php echo $value['total'] ?></td>
                                </tr>
                                <?php    
                            } 
                    ?>
                </table>
            </div>
        </div>
        <div class="price">
            <h3>Price Details:</h3>
            <table class="pricetable">
                <tr>
                    <td>Total (
                        <?php echo count($_SESSION['cart']) ?> items)
                    </td>
                    <td>Rs.
                        <?php echo $_SESSION['subtotal'] .".00" ?>
                    </td>
                </tr>
                <tr>
                    <td>Delivery charges</td>
                    <td style="color: green;">FREE</td>
                </tr>

                <tr class="final">
                    <td style="font-weight: bold;">Amount Payable</td>
                    <td style="color: green;">Rs.
                        <?php echo $_SESSION['subtotal'] .".00" ?>
                    </td>
                </tr>
            </table>
        </div>

        <p class="payment">Payment Method CASH ON DELIVERY</p>
    </div>
</body>

</html>