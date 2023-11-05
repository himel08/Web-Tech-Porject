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

$servername="localhost";
$username="root";
$pass="";
$dbname="web";
$conn= mysqli_connect($servername,$username,$pass,$dbname);

$email = $_SESSION['email'];
$sql1 = "SELECT * FROM project WHERE email='$email'";
$result = mysqli_query($conn,$sql1);
$info=mysqli_fetch_assoc($result); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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


</body>

<?php 







if(isset($_GET['update']))
{
    header('location: proupdate.php');
}
?>

</html>