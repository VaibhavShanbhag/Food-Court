<?php
   include("../private/dbconnect.php");

   $food_id = $_POST['fid'];

   if(isset($_POST['update'])){
       $name = $_POST['name'];
       $type = $_POST['type'];
       $category = $_POST['category'];
       $desp = $_POST['description'];
       $price = $_POST['price'];

       $query = "UPDATE `food` SET `food_name`='$name', `type`='$type', `category`='$category', `description`='$desp', `price`='$price' where `food_id`='$food_id'";
       $run = mysqli_query($conn,$query);

       if ($run == true) 
		{
			?>
                <script type="text/javascript">
                    alert("Item Updated Successfully!");
                    window.open("admindash.php","_self");
                </script>
            <?php
		}

        else{
            ?>
                <script type="text/javascript">
                    alert(<? php echo mysqli_error($conn); ?>);
                </script>
            <?php
            }
}
?>