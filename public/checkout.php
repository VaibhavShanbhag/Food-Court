<?php
    session_start();
    include("../private/dbconnect.php");

    $sql = "select * from `customer` where `cust_id`= '{$_SESSION['custid']}'";
    $run = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($run);

    if(isset($_POST['checkout'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $sql = "INSERT INTO `order`(`order_id`, `cust_id`, `food_id`, `quantity`, `total_price`) VALUES ('{$value['cust_id']}', '{$value['cust_id']}', '{$value['food_id']}', '{$value['qty']}', '{$value['total']}')";
            $run = mysqli_query($conn,$sql);
            ?>
        <script>
            window.open("order.php","_self");
        </script>

        <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Checkout | Food Court</title>
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
            justify-content: space-between;
            background: #fff;
            padding: 2rem 9%;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        header .logo {
            font-size: 2.5rem;
            font-weight: bolder;
            color: #666;
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
        }

        .container {
            font-size: 15px;
            max-width: 80%;
            margin: 140px auto;
            background-color: rgb(175, 173, 173);
            border: 2px solid black;
            border-radius: 5px;
            
        }

        .accdetails {
            max-width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 45px;
            box-shadow: 1px 1px 10px black;
            background-color: white;
        }

        .accdetailsin {
            max-width: 70%;
            margin: auto;
            display: flex;
            padding-bottom: 20px;
        }

        .accdetailsleft p,
        .accdetailsright p {
            height: 35px;
            text-align: center;
        }

        .accdetailsright p {
            margin-left: 30px;
            text-align: start;
        }

        .accdetails h3,
        p {
            text-align: center;

        }

        .accdetails h3 {
            padding: 30px 0 20px 0;
        }

        .accdetails p {
            margin-top: 10px;
        }

        .accdetails p span {
            margin-left: 20px;
        }

        button {
            border: none;
            font-size: 20px;
            background-color: chartreuse;
            height: 40px;
            width: 200px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .main2 {
            display: flex;
            max-width: 80%;
            margin: auto;
        }

        .main2 .cartsummary {
            /* max-width: 45%; */
            margin: 15px 0 15px auto;
            padding: 15px;
            margin: auto;
            background-color: white;
            box-shadow: 1px 1px 10px black;

        }

        .cartsummary h3 {
            text-align: center;
        }

        .main2 .paymentmethod {
            margin: 15px;
            max-width: 45%;
            padding: 15px;
            margin: 15px 0 15px auto;
            background-color: white;
            box-shadow: 1px 1px 10px black;

        }

        .cartsummary table tr td {
            padding: 15px 30px;

        }

        .cartsummary h3 {
            margin: 15px 0 8px 0;
        }

        .paymentmethod h3 {
            text-align: center;
            margin: 5px 0 5px 0;
        }

        .paymentmethod table tr td {
            padding: 10px 40px;
        }

        .order {
            text-decoration: none;
            text-align: center;
            background: linear-gradient(to right, red, #ff9900);
            color: white;
            padding: 8px 40px;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="index.php" class="btn">Home</a>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>

        <a class="btn" href="cart.php">Cart
            <?php
                if (isset($_SESSION['cart'])) 
                {
                    $count = count($_SESSION['cart']);
                    echo "<span><b>$count</b></span>";
                }
                else
                {
                    echo "<span><b>0</b></span>";
                }
            ?>
        </a>
    </header>
    <div class="container">
        <div class="accdetails">
            <h3>Account Details</h3>
            <div class="accdetailsin">
                <div class="accdetailsleft">
                    <p class="name">Name:</p>
                    <p class="mobile">Mobile No:</p>
                    <p class="address">Address:</p>
                    <p class="email">Email:</p>
                </div>
                <div class="accdetailsright">
                    <p class="name"><?php echo $data['name'] ?></p>
                    <p class="mobile"><?php echo $data['mobile_number'] ?></p>
                    <p class="address"><?php echo $data['address'] ?></p>
                    <p class="email"><?php echo $data['email'] ?></p>
                </div>
            </div>
        </div>
        <div class="main2">
            <div class="cartsummary">
                <h3>Cart Summary</h3>
                <table>
                    <?php
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $query = "SELECT `food_name` FROM `food` WHERE `food_id` = $value[food_id]";
                            $run = mysqli_query($conn, $query);
                            $data = mysqli_fetch_assoc($run);
                            ?>
                            <tr>
                                <td><?php echo $value['qty']?> * <?php echo $data['food_name']?></td>
                                <td><?php echo $value['total']?></td>
                            </tr>
                    <?php
                    }
                    ?>
                </table>
                <h3>Subtotal: <?php echo $_SESSION['subtotal'] .".00" ?></h3>
            </div>
            <div class="paymentmethod">
                <h3>PAYMENT METHOD</h3>
                <p>Cash on Delivery(COD)</p>
                <table>
                    <tr>
                        <td colspan="2">
                            <h4>Price Details</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Total(<?php echo count($_SESSION['cart']) ?> items)</td>
                        <td>RS. <?php echo $_SESSION['subtotal'] .".00" ?></td>
                    </tr>
                    <tr>
                        <td>Delivery Charges</td>
                        <td style="color: green;">FREE</td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Amount Payable</h4>
                        </td>
                        <td>
                            <h4 style="color: green;">RS. <?php echo $_SESSION['subtotal'] .".00" ?></h4>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
        <form action="checkout.php" method="post">
            <p style="text-align: center;">
            <input type="submit" class="order" name="checkout" value="Order Now">
            </p>
        </form>
    </div>
</body>

</html>