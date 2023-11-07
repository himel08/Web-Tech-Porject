<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">


    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Seller Sign Up</h1>
            <form  method="get" action="">
                <div class="input-group">


                <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Enter Your Email"><br>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" id="myInput">
                    <span class="eye" onclick="myfunction()">
                    <i id="hide1" class="fa-solid fa-eye"></i>
                    <i id="hide2" class="fa-solid fa-eye-slash"></i>

                    </span>
                   
                </div>

                <p >Forgot Password? <a href="#">Click Here</a></p>
                <div class="btn-field">
                    <button type="submit" name="signup" id="signupbtn" class="disable"> <a href="sellersignup.php">Sign Up</a></button>
                    <button type="submit" name="signin" id="signinbtn" >Sign In</button>
                  
                </div>
            </div>
            </form>
        </div>
    </div>

    <?php
session_start();
include "db_conn1.php";
if(isset($_GET['signin']))
{
   
    $email=$_GET['email'];
    $pass=$_GET['pass'];
    
    

    $sql="SELECT * FROM seller WHERE EMAIL='$email'AND PASS='$pass'";
    $result=mysqli_query($conn,$sql);
 
    $count = mysqli_num_rows($result);
    if($count==1){

        while($r=mysqli_fetch_assoc($result))
        {
            $_SESSION['name']=$r["NAME"];
            $_SESSION['email']=$r["EMAIL"];
            $_SESSION['number']=$r["NUMBER"];
            $_SESSION['pass']=$r["PASS"];
            
            header("Location:seller.php");
        }
        
    }
    else{
        echo "<script>
        alert('Incorrect Password or Email')
        </script>";
    }
    
   
}
?>
<script>
 function myfunction(){
    let x = document.getElementById("myInput");
    let y = document.getElementById("hide1");
    let z = document.getElementById("hide2");

    if ( x.type === "password") {
        x.type ="text";
        y.style.display ="block";
        z.style.display ="none";
        
    }
    else{
        x.type = "password"
        y.style.display="none";
        z.style.display="block";
    }
 }

</script>

</body>
</html>