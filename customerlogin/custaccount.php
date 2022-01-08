<?php
    session_start();

    if(isset($_SESSION['custid'])){
        include('../private/dbconnect.php');
        $cust_id = $_SESSION['custid'];
        $query = "select * from `customer` where `cust_id` = $cust_id";
        $run = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($run);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data['name']; ?> | Food Court</title>
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

    .btn:hover,
    .btn2:hover {
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
        align-items: center;
        flex-direction: column;
        height: auto;
        background-color: lightblue;
        margin: 30px 400px;
        border: 2px solid lightblue;
        border-radius: 20px;
        padding: 20px 0;
    }

    .container table{
        margin-top: 20px;
        font-size: 16px;
        border-spacing: 4px;
    }

    .container .welcome{
        font-size: 27px;
    }
    
    .btn2 {
        display: inline-block;
        text-align: center;
        width: 100%;
        padding: .8rem 3rem;
        border: .2rem solid #0cbcf7;
        cursor: pointer;
        font-size: 1.7rem;
        border-radius: .5rem;
        position: relative;
        overflow: hidden;
        z-index: 0;
        background-color: #0cbcf7;
        color: white;
        text-transform: uppercase;
    }

    .tag{
            padding: 10px;
			font-weight: 400;
    }

    .data{
            padding: 9px;
			font-weight: 600;
			font-size: 19px;
			text-align: left;
    }

</style>
<body>
    <header>
        <a href="../public/index.php" class="btn">Home</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="#" style="background-color:red; border: .2rem solid red;">My Orders</a>
    </header>
    <div class="admin">
        <h1>ACCOUNT INFORMATION</h1>
    </div>
    <div class="container">
        <h1 class="welcome">Welcome <span style="color: red;"><?php echo $data['name']; ?></span></h1>
    <table>
                <tr>
                    <td class="tag">Name: </td>
                    <td class="data"><?php echo $data['name']; ?></td>
                </tr>
                <tr>
                    <td class="tag">Mobile Number: </td>
                    <td class="data"><?php echo $data['mobile_number']; ?></td>
                </tr>
                <tr>
                    <td class="tag">Address: </td>
                    <td class="data" width="300"><?php echo $data['address']; ?></td>
                </tr>
                <tr>
                    <td class="tag">Email: </td>
                    <td class="data"><?php echo $data['email']; ?></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <br><a href="editinfo.php" class="btn2" style="margin-right: 75px;">Edit Information</a>
                    </td>
                </tr>
        </table>
    </div>
</body>

</html>