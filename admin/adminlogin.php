<?php
session_start();
if (isset($_POST['login'])) {
	$username = $_POST['username'];
    $password = $_POST['password'];
    $uname = "Admin";
    $pass = "12345";

    
    if(($username == $uname) && ($password == $pass)){
        $_SESSION['uname'] = $username;
        ?>
        <script>
            window.open('admindash.php', '_self');
        </script>
        <?php
    }

    else {
        ?>
        <script>
            alert("Invalid Username or Password!");
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login | Food Court</title>
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

    .admin {
        margin-top: 120px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .admin h1 {
        padding: 10px 440px;
        background-color: rgb(165, 165, 165);
        color: white;
        font-size: 23px;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        box-sizing: border-box;
        border: none;
        outline: none;
        padding: 12px 5px;
        background: rgba(0, 0, 0, 0.10);
        border-radius: 5px;
        margin: 10px;
        font-weight: bold;
        border: 2px solid rgb(182, 182, 182);
    }

    input[type=submit] {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 0;
        margin-top: 10px;
        outline: none;
        border: none;
        background-color: var(--red);
        border-radius: 5px;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        margin-left: 8px;
    }
</style>
<body>
    <header>
        <a href="../public/index.php" class="btn">Back</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="#" style="background-color:green; border: .2rem solid green;">Home</a>
    </header>
    <div class="admin">
        <h1>ADMIN LOGIN</h1>
    </div>
    <div class="container">
        <form action="adminlogin.php" method="post">
            <input type="text" name="username" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>

</html>