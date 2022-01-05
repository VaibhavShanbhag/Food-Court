<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Cart | Food-Court</title>
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
            max-width: max-content;
            margin: 150px auto;
            justify-content: center;
        }

        .container img {
            width: 260px;
            height: 250px;
            margin-left: 60px;
        }

        h1{
            font-size: 25px;
        }

        h1,
        p {
            text-align: center;
            margin-top: 20px;
        }

        p {
            font-size: 19px;
        }

        button {
            border: none;
            font-size: 20px;
            background: linear-gradient(to right, red, #ff9900);
            height: 45px;
            width: 150px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <a href="fooditems.php" class="btn">Menu</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
    </header>
    <div class="container">
        <img src="images/empty-cart.png" alt="empty" srcset="">
        <h1>Empty Cart</h1>
        <p>Looks like you haven't made your choice yet</p>
        <p><a href="index.php"><button>Back To Home</button></a></p>
    </div>
</body>

</html>