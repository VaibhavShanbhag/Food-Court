<?php
    session_start();

    if(!isset($_SESSION['custid'])){
        ?>
        <script>
            window.open('login.php', '_self');
        </script>
        <?php
    }

    else{
        include("../private/dbconnect.php");
        $query = "SELECT * FROM `food`";
		$run = mysqli_query($conn, $query);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order your Favourite Food Now | Food Court</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="http://static.sasongsmat.nu/fonts/vegetarian.css" />

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

    section .menu {
        margin-top: 50px;
        text-align: center;
        font-size: 4.5rem;
        color: #333;
    }


    section {
        padding: 20px;
        width: 1280px;
        margin: 40px auto;
    }

    section ul {
        display: flex;
        margin-bottom: 10px;
    }

    section ul li {
        font-size: 15px;
        background-color: #eee;
        padding: 8px 20px;
        margin: 5px;
        letter-spacing: 1px;
        list-style: none;
        cursor: pointer;
    }

    section ul li.active {
        background-color: var(--red);
        color: #fff;
    }

    .food-items {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        justify-content: center;
    }

    .food-items .food {
        padding: 2rem;
        background: #fff;
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        border: .1rem solid rgba(0, 0, 0, .3);
        border-radius: .5rem;
        text-align: center;
        flex: 1 1 30rem;
        position: relative;
        margin-right: 10px;
    }

    .food-items .food img {
        height: 25rem;
        object-fit: cover;
        width: 100%;
        border-radius: .5rem;
    }

    .food-details .food-title-type {
        margin-top: 8px;

    }

    .food-items .food-title-type h3 {
        margin-top: 5px;
        color: #333;
        font-size: 20px;
        text-align: justify;
    }

    .food-items .food-description {
        margin: 10px 0;
        height: 80px;
    }

    .food-items .food-description p {
        text-align: justify;
        color: rgb(49, 49, 49);
        font-size: 11px;
    }

    .food-items .price-quantity h3 {
        color: #333;
        font-size: 20px;
        text-align: justify
    }

    .food-items .price-quantity {
        display: flex;
        justify-content: space-between;
    }

    .food-items .price-quantity .quantity {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -5px;
    }

    .food-items .price-quantity .quantity button {
        padding: 14px;
        border-radius: 50%;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    .food-items .price-quantity .quantity .btn1 {
        background-color: red;
    }

    .food-items .price-quantity .quantity .btn2 {
        background-color: green;
    }

    .food-items .price-quantity .quantity h3 {
        padding: 10px;
        border-radius: 50%;
        border: 1px solid grey;
        margin: 0 5px;
    }

    .food-items .food a {
        text-transform: uppercase;
        text-align: center;
        width: 100%;
        display: inline-block;
        font-size: 15px;
        color: white;
        background-color: var(--red);
        padding: 10px 20px;
        margin-top: 20px;
        border-radius: 6px;
    }

    .food-items .food a i {
        margin-right: 5px;
    }
</style>

<body>
    <header>
        <a href="index.php" class="btn">Home</a>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>

        <a class="btn" href="#">Cart
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
    <section>
        <h3 class="menu">Menu</h3>
        <ul class="list-top">
            <li class="list active" data-filter="All">All</li>
            <li class="list" data-filter="burger">Burger</li>
            <li class="list" data-filter="pizza">Pizza</li>
            <li class="list" data-filter="icecream">Ice Cream</li>
            <li class="list" data-filter="colddrink">Cold Drinks</li>
            <li class="list" data-filter="sweets">Sweets</li>
            <li class="list" data-filter="breakfast">Breakfast</li>
            <li class="list" data-filter="biryani">Biryani</li>
        </ul>
        <div class="food-items">
            <?php
                if(mysqli_num_rows($run) < 1){
                ?>
                    <script type="text/javascript">
                        alert("No records found!");
                    </script>
                <?php
                }    
                else {
                    while($data = mysqli_fetch_assoc($run)){
                ?>
                    <div class="food <?php echo $data['category']; ?>">
                        <img src="Food Images/<?php echo $data['image']; ?>" alt="">
                        <div class="food-details">
                            <div class="food-title-type">
                            <h3 class="title">
                            <?php echo $data['name']; ?>
                                <?php 

                                    if($data['type'] == "veg"){

                                        echo "<span class='veg-indian-vegetarian'></span>";
                                    }

                                    else {
                                        echo "<span style='color:red; margin: 3px;'>&#9679;&#8414;</span>";
                                    }

                                ?>
                             </h3>
                            </div>
                        <div class="food-description">
                            <p>
                                <?php echo $data['description']; ?>
                            </p>
                        </div>
                        <div class="price-quantity">
                            <h3 class="price">Rs.
                                <?php echo $data['price']; ?>
                            </h3>
                            <div class="quantity">
                            <button onclick="decrement()" class="btn1">-</button>
                            <h3 id="quantity">1</h3>
                            <button onclick="increment()" class="btn2">+</button>
                            </div>
                        </div>
                    </div>
                <a href="#"><i class="fas fa-shopping-cart"></i>Add to cart</a>
            </div>
            <?php
            }
            }
            ?>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.list').click(function () {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.food').show('1000');
                }
                else {
                    $('.food').not('.' + value).hide('1000');
                    $('.food').filter('.' + value).show('1000');
                }
            })

            $('.list').click(function () {
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
        var quantity = 1;

        function increment() {
            quantity = quantity + 1;

            if (quantity <= 10) {
                document.getElementById('quantity').innerText = quantity;
            }

            else {
                quantity = 10;
                document.getElementById('quantity').innerText = quantity;
            }
        }

        function decrement() {
            quantity = quantity - 1;

            if (quantity > 1) {
                document.getElementById('quantity').innerText = quantity;
            }

            else {
                quantity = 1;
                document.getElementById('quantity').innerText = quantity;
            }

        }

    </script>
</body>

</html>