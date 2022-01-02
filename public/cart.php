<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Cart | Food Court</title>

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

        .intro img {
            width: 40px;
            height: 40px;
            margin-left: 45%;
        }

        .intro1 {
            display: flex;
            justify-content: center;
            margin-top: 120px;

        }

        .intro1 h3 {
            color: #333;
            margin-right: 5px;
            font-size: 4.5rem;

        }

        .intro1 h3 i {
            color: red;
            margin-right: 4px;
        }

        .container {
            max-width: 80%;
            max-height: 50%;
            margin-top: 20px;
            border-radius: 5px;
            -moz-box-shadow: 3px 3px 5px 6px #ccc;
            -webkit-box-shadow: 3px 3px 5px 6px #ccc;
            box-shadow: 3px 3px 8px 9px #ccc;

        }

        .container1 {
            width: 100%;
            margin-left: -12px;
        }

        .container1 nav {
            width: 102%;
        }

        .container1 ul {
            display: flex;
            background-color: lightgray;
            line-height: 55px;
        }

        .container1 ul li {
            list-style: none;
            font-size: 20px;
            font-weight: bold;
        }

        .container1 ul li:nth-child(1) {
            margin-left: 85px;
        }

        .container1 ul li:nth-child(2) {
            margin-left: 125px;
        }

        .container1 ul li:nth-child(3) {
            margin-left: 295px;
        }

        .container1 ul li:nth-child(4) {
            margin-left: 80px;
        }

        .container1 ul li:nth-child(5) {
            margin-left: 70px;
        }

        .container1 ul li:nth-child(6) {
            margin-left: 110px;
        }

        .item1 {
            display: flex;
            max-height: 20%;
            margin: -5px 30px 40px 30px;
            background-color: transparent;
        }

        .item1 img {
            height: 110px;
            width: 160px;
            margin: 25px 0 0 30px;
            border-radius: 3px;
        }

        .details {
            max-width: 25%;
            margin-left: 40px;
        }

        .price,
        .quantity,
        .amount,
        .remove {
            width: 140px;
            margin-top: 65px;
            text-align: center;
            margin-left: 20px;
            font-size: 14px;
        }

        .container .item1 .veg {
            height: 20px;
            width: 20px;

        }

        .title {
            display: flex;
            max-height: max-content;
        }

        .title h3 {
            margin-top: 6px;
            color: #333;
            font-size: 20px;
            text-align: justify;
            font-weight: bold;
        }

        .details p {
            text-align: justify;
            color: rgb(49, 49, 49);
            font-size: 12px;
            margin-top: 10px;
        }

        .outer {
            margin: 63px 0 0 90px;
        }

        .container .outer a {
            text-decoration: none;
            text-align: center;
            background-color: red;
            color: white;
            padding: 10px 29px;
            border-radius: 5px;
            font-size: 16px;

        }

        .subtotal {
            background-color: lightgray;
            height: 54px;
            width: 102%;
            margin-left: -12px;
            margin-top: 30px;
        }

        .subtotal h5 {
            margin-left: 790px;
            font-size: 22px;
            padding-top: 12px;
            font-weight: bold;
            
        }
    </style>
</head>

<body>
    <header>
        <a href="fooditems.php" class="btn">Menu</a>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
    </header>
    <div class="intro">
        <div class="intro1">
            <h3><i class="fas fa-shopping-cart"></i>CART</h3>
        </div>
        <div class="container">
            <div class="container1">
                <nav>
                    <ul>
                        <li>Image</li>
                        <li>Item</li>
                        <li>Price</li>
                        <li>Quantity</li>
                        <li>Amount</li>
                        <li>Remove</li>
                    </ul>
                </nav>
            </div>
            <div class="item1">
                <img src="Food Images/Chicken Supreme Pizza.jpg" alt="image" srcset="">
                <div class="details">
                    <div class="title">
                        <h3>Paneer kadhai <span style='color:red; margin: 3px;'>&#9679;&#8414;</span></h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quia rerum, itaque quae
                        corrupti
                        neque magnam a aliquam molestias dolores?</p>
                </div>
                <div class="price">99</div>
                <div class="quantity">x2</div>
                <div class="amount">198</div>
                <div class="outer">
                    <a href="">Remove</a>
                    </a>
                </div>
            </div>
            <hr class="line">
            <div class="subtotal">
                <h5>Subtotal &nbsp;&nbsp;&nbsp;430.00</h5>
            </div>
        </div>
    </div>
</body>


</html>