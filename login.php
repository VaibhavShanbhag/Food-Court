<?php
    session_start();
    if(isset($_POST['login'])){
      include('private/dbconnect.php');

      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "select * from `customer` where `email` = '$email' AND `password` = '$password'";
      $run = mysqli_query($conn,$sql);

      $row = mysqli_num_rows($run);

      if($row < 1){
        ?>
        <script>
          alert("Invalid Email or Password!");
          window.open('login.php','_self');
        </script>
			<?php
      }

      else {
          $data = mysqli_fetch_assoc($run);
          $cust_id = $data['cust_id'];

          $_SESSION['cust_id'] = $cust_id;

          ?>
              <script>
                window.open('public/index.html?cust_id<?php echo $cust_id ?>','_self');
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
  <title>Login | Food Court</title>
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
			background: rgba(0,0,0,0.8);
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

  .box h2{
    text-align: center;
  }
  
  input[type=text], input[type=number], input[type=email], input[type=text], textarea, input[type=password]{
			width: 100%;
			box-sizing: border-box;
			padding: 12px 5px;
			background: rgba(0,0,0,0.10);
			outline: none;
			border: none;
			border-bottom: 1px solid #fff;
			color: #fff;
			border-radius: 5px;
			margin: 5px;
			font-weight: bold;
		}
    
		input[type=submit]{
			width: 100%;
			box-sizing: border-box;
			padding: 10px 0;
			margin-top: 20px;
			outline: none;
			border: none;
			background: linear-gradient(to right, red, #d66113);
			border-radius: 20px;
			font-size: 20px;
			color: #fff;
      cursor: pointer;
		}
    
		input[type=submit]:hover{
      background: linear-gradient(to left, red, #d66113);
      transition: 0.3s;
    }

    form .forgot-pass{
      text-align: end;
      color: #545454;
      font-weight: bold;
      font-size: 14px;
    }

    h5{
      text-align: center;
      margin-top: 20px;
      font-size: 16px;
    }

    h5 a{
      color: blue;
    }

    h5 a:hover{
      color: var(--red);
      transition: 0.3s;
    }
</style>

<body>
  <div class="container">
    <div class="box">
      <h2>Login</h2>
      <form method="post" action="login.php">
        <input type="email" name="email" placeholder="Email" required="required">
        <input type="password" name="password" placeholder="Password" required="required">
        <a href="confirmEmail.php" class="forgot-pass">Forgot password?</a>
        <input type="submit" name="login" value="Login">
        <h5>Don't have an Account? <a href="signup.php">Sign Up</a></h5>
      </form>
    </div>
  </div>
</body>

</html>