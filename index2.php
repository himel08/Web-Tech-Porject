<?php 
session_start();

if(!isset($_SESSION['email']))
{
  header('location: signin.php');
}
else if(isset($_GET['logout']))
{
  session_destroy();
  header('location: index.php');
}

include "db_conn1.php";

$email = $_SESSION['email'];
$sql1 = "SELECT * FROM project WHERE email='$email'";
$result = mysqli_query($conn,$sql1);
$info=mysqli_fetch_assoc($result); 

if(isset($_GET['update']))
{
    header('location:proupdate.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>Document</title>
</head>

<body>
    <nav >

        <div class="container">
            <a href="#"><img src="img/logo.png" alt=""></a>
            <div class="search-bar">
                <input type="search" placeholder="search here">
                <i class="fa-solid fa-magnifying-glass"></i>

            </div>
            <div>
            <i class="fa-solid fa-circle-user"></i>
                <span>Hello, <?php echo "{$info['NAME']}" ?>  </span>
            </div>
            <div class="button">
                <form action="" method="get">
                <p> <button name="logout">Logout</button></p>
                </form>

                <form action="" method="get">
                <p> <button name="update"> Update Profile</button></p>
                </form>
               
               
            </div>
            <div class="cart">
                <i class="fa-solid fa-cart-plus"></i>
                <span id="span">0</span>
            </div>
           
        </div>
        
    </nav>
   

<!--------- Home Section ---------->
<!--------- Home Section ---------->
<!--------- Home Section ---------->
<!--------- Home Section ---------->
<div class="home">
    <div class="main-text">
      <h1>Welcome,<span class="two"><?php echo "{$info['NAME']}" ?></span> <br>
      <h1>Discover The Best  <br> Furniture For You</h1>
      <p class="p">Timeless furniture, where comfort meets style.,</p>
      <p>Elevate your living spaces with our exquisite range of furniture, designed to bring warmth and beauty to every room.</p>
      <button class="btn" id="btn">View More</button>

    </div>

</div>


<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->

<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->
<!--------- Product Display Section ---------->

<section id="product1" class="product1">
 <div class="pro-container">
    <div class="pro">
        <img src="img/img/p8.png" alt="">
        <div class="des">
        <span>OTOBI</span>
        <h1>Single Chair</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$180</h4>

        </div>

        <button class="add-cart">Buy Now</button>
        
        
    </div>
    
    <div class="pro">
        <img src="img/img/p2.png" alt="">
        <div class="des">
        <span>PARTEX</span>
        <h1>Comfort Chair</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$280</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
        <img src="img/img/p5.png" alt="">
        <div class="des">
        <span>RFL</span>
        <h1>Single Seat Sofa</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$190</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
    <img src="img/img/p12.png" alt="">
        <div class="des">
        <span>OTOBI</span>
        <h1>Sofa set</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>

        </div>
        <h4>$150</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
    <img src="img/img/p3.png" alt="">
        <div class="des">
        <span>OTOBI</span>
        <h1>SOFA SET</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$170</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
    <img src="img/img/p8.png" alt="">
        <div class="des">
        <span>PARTEX</span>
        <h1>Family Sofa set</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$320</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
    <img src="img/img/p4.png" alt="">
        <div class="des">
        <span>OTOBI</span>
        <h1>Single Chair</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$200</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>
    <div class="pro">
    <img src="img/img/p1.png" alt="">
        <div class="des">
        <span>RFL</span>
        <h1>Four Seat Sofa</h1>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>

        </div>
        <h4>$450</h4>

        </div>
        <button class="add-cart">Buy Now</button>
    </div>

 </div>
</section>


<!--------- Footer Section ---------->
<!--------- Footer Section ---------->
<!--------- Footer Section ---------->
<!--------- Footer Section ---------->

<footer >
<div class="container">
  <div class="row">
    <div class="footer-col">
        <h4>Company</h4>
        <ul>
            <li><a href="sellersignup.php">Become a Seller</a></li>
            <li><a href="sellersignin.php">Login As Seller</a></li>
            <li><a href="adminsignin.php">Admin Login</a></li>
        </ul>
    </div>

    <div class="footer-col">
        <h4>Details</h4>
        <ul>
            <li><a href="#">017xxxxxxx</a></li>
            <li><a href="#">Webtech@gmail.com</a></li>
            <li><a href="#">wwww.Webtech.com</a></li>
        </ul>
    </div>

    <div class="footer-col">
        <h4>Support</h4>
        <ul>
            <li><a href="#">Order Track</a></li>
            <li><a href="#">Help Desk</a></li>
            <li><a href="#">Customer FAQ</a></li>
        </ul>
    </div>

    <div class="footer-col">
        <h4>Policies</h4>
        <ul>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policies</a></li>
            <li><a href="#">Refund Policies</a></li>
        </ul>
    </div>
  </div>
</div>
</footer>


<script src="addcart.js"></script>
</body>


</html>