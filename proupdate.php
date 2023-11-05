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

if(isset($_GET['update']))
{
    $name=$_GET['name'];
    $number=$_GET['number'];
    $pass=$_GET['pass'];
    $sql2 = "UPDATE project SET NAME='$name',NUMBER='$number',PASS='$pass' WHERE EMAIL='$email'";
    $result2 = mysqli_query($conn,$sql2);

    if($result2)
    {
        header('location:proupdate.php');
    }

}
?>


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

<!--------- NavBar Section ---------->
<!--------- NavBar Section ---------->
<!--------- NavBar Section ---------->
<!--------- NavBar Section ---------->
    
    <div class="container">
        <form action="#" method="get" class="form">
      <p> <button name="logout">Logout</button></p>
    </form>
        <div class="form-box">
            <h1 id="title">Update Your Profile</h1>
            <form  method="get" action="">
                <div class="input-group">

                
                <div class="input-field" id="nameField">
                <i class="fa-solid fa-user"></i>
                    <input type="text" name="name" value="<?php echo "{$info['NAME']}" ?>"><br>
                </div>
              
                <div class="input-field" >
                <i class="fa-solid fa-phone"></i>
                    <input type="number" name="number" value="<?php echo  "{$info['NUMBER']}"?>"><br>
                </div>

                <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" id="myInput" value="<?php echo  "{$info['PASS']}" ?>">
                    <span class="eye" onclick="myfunction()">
                    <i id="hide1" class="fa-solid fa-eye"></i>
                    <i id="hide2" class="fa-solid fa-eye-slash"></i>

                    </span>
                </div>
                
                <form action="#" method="get" >   
                <div class="btn-field">
                    <button type="submit" name="update" id="update">Update</button>
                  
                </div>
                </form>
            </div>
            </form>
        </div>
    </div>






<!--------- JAVASCRIPT Section ---------->
<!--------- JAVASCRIPT Section ---------->
<!--------- JAVASCRIPT Section ---------->
<!--------- JAVASCRIPT Section ---------->
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