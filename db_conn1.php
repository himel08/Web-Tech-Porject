<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="web";
$conn= mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn)
{
    echo "Connection failed";
    exit();
}
?>