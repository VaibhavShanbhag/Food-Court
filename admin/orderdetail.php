<?php
    include("../private/dbconnect.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Details | Food Court</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
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
        border: .2rem solid green;
        color: var(--red);
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: .5rem;
        position: relative;
        overflow: hidden;
        z-index: 0;
        margin-top: 1rem;
        background-color: green;
        color: white;
    }

    .btn:hover {
        -moz-box-shadow: 3px 3px 5px 6px #ccc;
        -webkit-box-shadow: 3px 3px 5px 6px #ccc;
        box-shadow: 3px 3px 5px 6px #ccc;
    }

    .admin {
        margin-top: 120px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .admin h1 {
        padding: 10px 336px;
        background-color: rgb(165, 165, 165);
        color: white;
        font-size: 23px;
    }

    .container{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        margin-top: 5rem;
    }

    .btn2 {
        display: inline-block;
        text-align: center;
        width: 20%;
        padding: .8rem 3rem;
        border: .2rem solid #0cbcf7;
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: .5rem;
        position: relative;
        overflow: hidden;
        z-index: 0;
        margin-top: 1.5rem;
        background-color: #0cbcf7;
        color: white;
        text-transform: uppercase;
    }

    table{
            border-collapse: collapse;
            margin: 40px 60px;
            font-size: 15px;
        }
        table tr th{
            color: white;
            background-color: black;
        }
        table tr td{
            text-align: center;
            border: 1px solid black;
            padding: 20px;
        }
        table tr th{
            padding: 10px;
            
        }

</style>
<body>
    <header>
        <a href="admindash.php" class="btn">Back</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="../public/logout.php" style="background-color:red; border: .2rem solid red;">Logout</a>
    </header>
    <div class="admin">
        <h1>ORDER DETAILS</h1>
    </div>
    <table>
        <tr>
            <th style="width: 45px;">Order ID</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Name</th>
            <th >Address</th>
            <th>Email</th>
        </tr>
        <?php
            $sql = "select * from `order` inner join food on food.food_id = order.food_id inner join customer on customer.cust_id = order.cust_id";
            $run = mysqli_query($conn,$sql);
            while($data = mysqli_fetch_assoc($run)){
                ?>
            <tr>
            <td ><?php echo $data['order_id'] ?></td>
            <td><?php echo $data['food_name'] ?></td>
            <td><?php echo $data['price'] ?></td>
            <td>x<span style="font-size: 15px;"><?php echo $data['quantity'] ?></span></td>
            <td><?php echo $data['total_price'] ?></td>
            <td><?php echo $data['name'] ?></td>
            <td><?php echo $data['address'] ?></td>
            <td><?php echo $data['email'] ?></td>
            </tr>
            <?php
            }
        ?>
        
    </table>
</body>

</html>