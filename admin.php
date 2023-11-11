<?php 
session_start();

if(!isset($_SESSION['email']))
{
  header('location: adminsignin.php');
}
else if(isset($_GET['logout']))
{
  session_destroy();
  header('location: adminsignin.php');
}

include "db_conn1.php";

$email = $_SESSION['email'];
$sql1 = "SELECT * FROM admin WHERE email='$email'";
$result = mysqli_query($conn,$sql1);
$info=mysqli_fetch_assoc($result); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <title>Document</title>
</head>
<body>
<h1>Welcome to Admin Dashboard</h1>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="" alt="">
            </div>
            <span class="logo_name">Admin Panel</span>
        </div>

        <div class="menu-item">
            <ul class="nav-link">
                <li>
                    <a href="" >
                    <i class="fa-solid fa-house-user"></i>
                    <span class="link-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="">
                    <i class="fa-solid fa-file"></i>
                    <span class="link-name">Approve Seller Request</span>
                    </a>
                </li>
                <li>
                    <a href="">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <span class="link-name">Approve Product Request</span>
                    </a>
                </li>

                <li>
                    <a href="">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="link-name">Analysis</span>
                    </a>
                </li>

                <li>
                    <a href="">
                    <i class="fa-solid fa-comment"></i>
                    <span class="link-name">Massage</span>
                    </a>
                </li>

               

                <li>
                    <a href="">
                    <i class="fa-solid fa-user"></i>
                    <span class="link-name">Account</span>
                    </a>
                </li>
            </ul>

            <ul class="logout-mod">
            <li>
                    <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <form method="get">
                    <span class="link-name" ><button name="logout">Logout</button></span>
                    </form>
                    </a>

                <li>
                    <a href="">
                    <i class="fa-solid fa-moon" id="icon"></i>
                    <div class="link"> 
                    <span class="link-name" >Mood change</span>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <script>

     const body = document.querySelector("body"),
     modeToggle = document.querySelector(".link");

        modeToggle.addEventListener("click", () =>{
            body.classList.toggle("dark");

            
        });

    </script>
</body>
</html>