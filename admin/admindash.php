<?php
    session_start();

    if(!isset($_SESSION['uname'])){
        ?>
        <script>
            window.open('adminlogin.php', '_self');
        </script>
        <?php
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Food Court</title>
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
        text-transform: capitalize;
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

</style>
<body>
    <header>
        <a href="../public/index.php" class="btn">Home</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="../public/logout.php" style="background-color:red; border: .2rem solid red;">Logout</a>
    </header>
    <div class="admin">
        <h1>WELCOME TO ADMIN DASHBOARD</h1>
    </div>
    <div class="container">
            <a href="addnewitem.php" class="btn2">add new item</a>
            <a href="updateitem.php" class="btn2">update item</a>
            <a href="deleteitem.php" class="btn2">delete item</a>
            <a href="menudetail.php" class="btn2">menu details</a>
            <a href="orderdetail.php" class="btn2">order details</a>
            <a href="customerdetail.php" class="btn2">customer details</a>
    </div>
</body>

</html>