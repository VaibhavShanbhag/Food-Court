<?php
   include("../private/dbconnect.php");

   $food_id = $_GET['fid'];
   $sql = "select * from `food` where `food_id`='$food_id'";
   $run = mysqli_query($conn,$sql);
   $data = mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Item | Food Court</title>
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

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 62vh;
        background-color: lightblue;
        margin: 30px 80px;
        border: 2px solid lightblue;
        border-radius: 20px;
    }

    .container h1 {
        font-size: 32px;
        margin-top: 10px;
    }

    .container table {
        margin-top: 20px;
        margin-left: 56px;
        font-size: 14px;
        border-spacing: 4px;
    }

    input[type=text],
    input[type=number],
    input[type=file],
    select {
        padding: 3px;
    }

    img{
        height: 100px;
    }
</style>

<body>
    <header>
        <a href="admindash.php" class="btn">Back</a>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>
        <a class="btn" href="../public/logout.php" style="background-color:red; border: .2rem solid red;">Logout</a>
    </header>
    <div class="admin">
        <h1>UPDATE EXISTING ITEM</h1>
    </div>
    <div class="container">
        <table>
            <form action="updateitem1.php" method="post" enctype="multipart/form-data">
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $data['food_name']?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="type" id="type">
                            <?php
                                switch ($data['type']) {
                                    case 'veg':
                                        echo "<option value='veg'>Veg</option>";
                                        echo "<option value='non-veg'>Non-Veg</option>";
                                        break;

                                    case 'non-veg':
                                        echo "<option value='non-veg'>Non-Veg</option>";
                                        echo "<option value='veg'>Veg</option>";
                                        break;    
                                    
                                    default:
                                        # code...
                                        break;
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" id="category">
                            <?php
                                switch ($data['category']) {
                                    case 'burger':
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='breakfast>Breakfast</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;

                                    case 'pizza':
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='breakfast'>Breakfast</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;  

                                    case 'icecream':
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='breakfast>Breakfast</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;

                                    case 'colddrink':
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='breakfast'>Breakfast</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;

                                    case 'sweets':
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='breakfast>Breakfast</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;        

                                    case 'breakfast':
                                            echo "<option value='breakfast'>Breakfast</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='sweets'>Sweets</option>";
                                            echo "<option value='biryani'>Biryani</option>"; 
                                            break;  

                                    case 'biryani':
                                            echo "<option value='biryani'>Biryani</option>";
                                            echo "<option value='breakfast'>Breakfast</option>";
                                            echo "<option value='burger'>Burger</option>";
                                            echo "<option value='pizza'>Pizza</option>";
                                            echo "<option value='icecream'>Ice Cream</option>";
                                            echo "<option value='colddrink'>Cold Drinks</option>";
                                            echo "<option value='sweets'>Sweets</option>"; 
                                            break;  
                                    default:
                                        break;
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea rows="3" cols="25" name="description" required><?php echo $data['description']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price" required value="<?php echo $data['price']; ?>">
                    </td>
                </tr>
                <tr class="image">
                    <td>Image</td>
                    <td class="image">
                        <img src="../public/Food Images/<?php echo $data['image']; ?>">
                    </td>   
                </tr>
                <tr>
					<td>
						<input type="hidden" name="fid" value="<?php echo $data['food_id']; ?>">
					</td>
				</tr>
                <tr>
                    <td colspan="2" align="center">
                        <br><input type="submit" name="update" value="UPDATE" class="btn2"
                            style="margin-right:	 75px; width: 150px;">
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>