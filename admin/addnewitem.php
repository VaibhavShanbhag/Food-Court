<!DOCTYPE html>
<html>

<head>
    <title>Add New Item | Food Court</title>
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

    .btn2 {
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
        align-items: center;
        flex-direction: column;
        height: 60vh;
        background-color: lightblue;
        margin: 30px 80px;
        border: 2px solid lightblue;
        border-radius: 20px;
    }

    .container h1{
        font-size: 32px;
        margin-top: 10px;
    }

    .container table{
        margin-top: 20px;
        margin-left: 85px;
        font-size: 14px;
        border-spacing: 4px;
    }

    input[type=text],input[type=number],input[type=file],select{
        padding: 3px;
    }


</style>

<body>
    <header>
        <a href="admindash.php" class="btn">Back</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="../public/logout.php" style="background-color:red; border: .2rem solid red;">Logout</a>
    </header>
    <div class="admin">
        <h1>WELCOME TO ADMIN DASHBOARD</h1>
    </div>
    <div class="container">
        <h1>ADD NEW ITEM</h1>
        <table>
            <form action="addnewitem.php" method="post" enctype="multipart/form-data">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="type" id="type">
                            <option value="veg">Veg</option>
                            <option value="non-veg">Non-Veg</option>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" id="category">
                            <option value="burger">Burger</option>
                            <option value="pizza">Pizza</option>
                            <option value="icecream">Ice Cream</option>
                            <option value="colddrink">Cold Drinks</option>
                            <option value="sweets">Sweets</option>
                            <option value="breakfast">Breakfast</option>
                            <option value="biryani">Biryani</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea rows="3" cols="25" name="description" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price" required>
                    </td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <input type="file" name="simg" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <br><input type="submit" name="add" value="ADD" class="btn2"
                            style="margin-right:	 75px; width: 150px;">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>
<?php
   include("../private/dbconnect.php");

   if(isset($_POST['add'])){
       $name = $_POST['name'];
       $type = $_POST['type'];
       $category = $_POST['category'];
       $desp = $_POST['description'];
       $price = $_POST['price'];
       $imagename = $_FILES['simg'] ['name'];
       $tempname = $_FILES['simg'] ['tmp_name'];

       move_uploaded_file($tempname, "../public/Food Images/$imagename");

       $query = "INSERT INTO `food`(`image`, `name`, `type`, `category`, `description`, `price`) VALUES ('$imagename','$name','$type','$category','$desp','$price')";
       $run = mysqli_query($conn,$query);

       if ($run == true) 
		{
			?>
            <script type="text/javascript">
				alert("Item Added Successfully!");
			</script>

			<?php
		}

        else{
            ?>
            <script type="text/javascript">
				alert(<?php echo mysqli_error($conn); ?>);
			</script>

            <?php
        }
   }
?>