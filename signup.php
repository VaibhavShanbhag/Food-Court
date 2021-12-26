<?php
    if(isset($_POST['signup'])){
        include('private/dbconnect.php');

        $name = $_POST['name'];
        $mobile_number = $_POST['mobile_number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if($password != $cpassword){
            ?>
			<script type="text/javascript">
				alert("Password and Confirm Password not match!");
                //header("location: signup.php");
                window.open('signup.php','_self');
			</script>
			<?php
            die();
        }

        if (strlen($password) < 8) {
            ?>
			<script type="text/javascript">
				alert("Password should contain atleast 8 characters!");
                //header("location: signup.php");
                window.open('signup.php','_self');
			</script>
			<?php
            die();
        }
        
        $esql = "SELECT 1 FROM `customer` WHERE `email` = '$email'";
		$erun = mysqli_query($conn,$esql);

		if (mysqli_num_rows($erun) > 0) 
		{
			?>
			<script type="text/javascript">
				alert("Email Already Exist!");
                //header("location: signup.php");
                window.open('signup.php','_self');
                //window.open
			</script>
			<?php	
            die();
		}

        $sql = "INSERT INTO `customer`(`name`, `mobile_number`, `email`, `address`, `password`) VALUES ('$name', '$mobile_number', '$email', '$address', '$password')";
		$run = $conn->query($sql);
		
		if ($run === true) 
		{
			?>
			<script>
				alert("Customer Registration Successfully !");
				window.open('login.php','_self')
			</script>
			<?php
		}

        else
		{
    		echo "ERROR: $sql. " . mysqli_error($conn);
		}

    }     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Food Court</title>
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
    }

    *::selection {
        background: var(--red);
        color: #fff;
    }

    html {
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 6rem;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(37, 32, 32, 0.8)), url("public/images/login-img.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        box-sizing: border-box;
        z-index: -9999;
    }

    .box {
        border-radius: 20px;
        margin: auto;
        background: rgba(0, 0, 0, 0.8);
        padding: 40px 40px;
        color: #fff;
        box-sizing: border-box;
        z-index: 999;
        width: 25%;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .box h2 {
        text-align: center;
    }

    input[type=text],
    input[type=number],
    input[type=email],
    input[type=text],
    textarea,
    input[type=password] {
        width: 100%;
        box-sizing: border-box;
        padding: 12px 5px;
        background: rgba(0, 0, 0, 0.10);
        outline: none;
        border: none;
        border-bottom: 1px solid #fff;
        color: #fff;
        border-radius: 5px;
        margin: 5px;
        font-weight: bold;
    }

    input[type=submit] {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 0;
        margin-top: 25px;
        outline: none;
        border: none;
        background: linear-gradient(to right, red, #d66113);
        border-radius: 20px;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }

    input[type=submit]:hover {
        background: linear-gradient(to left, red, #d66113);
        transition: 0.3s;
    }

    form .forgot-pass {
        text-align: end;
        color: #545454;
        font-weight: bold;
        font-size: 14px;
    }

    h5 {
        text-align: center;
        margin-top: 20px;
        font-size: 16px;
    }

    h5 a {
        color: blue;
    }

    h5 a:hover {
        color: var(--red);
        transition: 0.3s;
    }

    .error{
        color: red;
        font-size: 14px;
        margin: 5px 1px
    }
    
    .error i{
        color: white;
    }

</style>

<body>
    <div class="container">
        <div class="box">
  
            <h2>Sign Up</h2>
            <form method="post" action="signup.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="number" step="0.01" name="mobile_number" placeholder="Mobile Number" required/>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" required>
                <input type="submit" name="signup" value="Sign Up">
                <h5>Already Have an Account? <a href="login.php">Login</a></h5>
            </form>
        </div>
    </div>
</body>

</html>