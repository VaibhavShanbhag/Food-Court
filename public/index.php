<?php
    session_start();

    if (isset($_SESSION['cust_id'])) {
        include('../private/dbconnect.php');
        $cust_id = $_SESSION['cust_id'];
        $query = "select * from `customer` where `cust_id` = $cust_id";
        $run = mysqli_query($cinn,$query);
        $run = mysqli_fetch_assoc($run);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Court - Best place to order your favourite food</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Food Court</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">speciality</a>
            <a href="#popular">popular</a>
            <a href="#step">Services</a>
            <a href="#review">review</a>
        </nav>
        <a class="btn btn2" href="login.php">login/sign up</a>
    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>food made with love</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas accusamus tempore temporibus rem amet
                laudantium animi optio voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem
                quisquam eos!</p>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>

    <!-- home section ends -->

    <!-- speciality section starts  -->

    <section class="speciality" id="speciality">

        <h1 class="heading"> our <span>speciality</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="images/s-img-1.jpg" alt="">
                <div class="content">
                    <img src="images/s-1.png" alt="">
                    <h3>tasty burger</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-2.jpg" alt="">
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>tasty pizza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-3.jpg" alt="">
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>cold ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.jpg" alt="">
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>cold drinks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-5.jpg" alt="">
                <div class="content">
                    <img src="images/s-5.png" alt="">
                    <h3>tasty sweets</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.jpg" alt="">
                <div class="content">
                    <img src="images/s-6.png" alt="">
                    <h3>healty breakfast</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-7.jpg" alt="">
                <div class="content">
                    <img src="images/s-7.png" alt="" class="imgs7">
                    <h3>tasty biryani</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-1.jpg" alt="">
                <h3>tasty burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-2.jpg" alt="">
                <h3>tasty cakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-3.jpg" alt="">
                <h3>tasty sweets</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-4.jpg" alt="">
                <h3>tasty cupcakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">order now</a>
            </div>
        </div>

    </section>

    <!-- popular section ends -->

    <!-- steps section starts  -->
    <section id="step">
        <div class="step-container">

            <h1 class="heading">our <span>services</span></h1>

            <section class="steps">

                <div class="box">
                    <img src="images/step-1.jpg" alt="">
                    <h3>choose your favorite food</h3>
                </div>
                <div class="box">
                    <img src="images/step-2.jpg" alt="">
                    <h3>free and fast delivery</h3>
                </div>
                <div class="box">
                    <img src="images/step-3.jpg" alt="">
                    <h3>easy payments methods</h3>
                </div>
                <div class="box">
                    <img src="images/step-4.jpg" alt="">
                    <h3>and finally, enjoy your food</h3>
                </div>

            </section>

        </div>
    </section>

    <!-- steps section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/rpic1.png" alt="">
                <h3>Vishwajeet Tekale</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod
                    ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="images/rpic2.png" alt="">
                <h3>Tanmay Nivaskar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod
                    ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="images/rpic3.png" alt="">
                <h3>Vaibhav Shanbhag</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod
                    ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- footer section  -->

    <section class="footer">
        <div class="footer-section">
            <div class="footer-links">
                <p>Account</p>
                <a href="#">customer</a>
                <a href="#">Admin</a>
            </div>

            <div class="footer-links">
                <p>for you</p>
                <a href="#">Contact</a>
                <a href="# ">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Report</a>
            </div>

            <div class="footer-links">
                <p>Food</p>
                <a href="#">burger</a>
                <a href="#">pizza</a>
                <a href="#">ice-cream</a>
                <a href="#">cold dinks</a>
                <a href="#">sweets</a>
                <a href="#">breakfast</a>
                <a href="#">biryani</a>
            </div>

            <div class="social-link">
                <p class="text">social links</p>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
        <p class="copyright">Copyright &copy; 2020-2021 <span>Food Court</span>. All rights reserved.</p>
    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <!-- <div class="loader-container">
    <img src="images/loader.gif" alt="">
</div> -->

    <!-- custom js file link  -->
    <script src="script.js"></script>
</body>

</html>