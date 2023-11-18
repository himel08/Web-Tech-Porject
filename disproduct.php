<?php
 include 'db_conn1.php';
if(isset($_POST['add-cart'])){
  $product_image =$_POST['product_image'];
  $product_name =$_POST['product_name'];
  $product_price =$_POST['product_price'];
  $product_quanity=1;

  $sql1 = "SELECT * FROM `cart` WHERE name='$product_name'";
  $select_cart=mysqli_query($conn,$sql1);
  if(mysqli_num_rows($select_cart)>0){
    echo "product already added";
  }
  else{
    $sql2="INSERT INTO `cart`(`name`, `price`, `image`, `quantity`) VALUES ('$product_name','$product_price','$product_image',$product_quanity)";
    $insert_product=mysqli_query($conn,$sql2);
    echo "product added to the cart";
  }

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

    <div class="container">
     
     <?php 
     $select_product= mysqli_query($conn,"SELECT * FROM `cart`") or die('query_failed');
     $row_count=mysqli_num_rows($select_product);
     
     ?>
     <h1>Your Product List</h1>
      <a href="addToCart.php"><i class="fa-solid fa-cart-plus"></i>
                <span ><?php echo $row_count; ?></span></a>
    <?php
          include 'db_conn1.php';

          $sql="SELECT * from products1";
          $query=mysqli_query($conn,$sql);
          while ($info=mysqli_fetch_array($query)) {
            ?>
        <section id="product1" class="product1">
            
          <div class="pro-container1">
            <div class="pro2">
              <form method="POST" action="#">
              <img id="img" src="image/<?php echo $info['product_image'] ;?>" alt="">
              <div class="des">
                <span> <?php echo $info['product_name']; ?></span>
              </div>
              <h3>Price: <?php echo $info['product_price']; ?></h3>
              <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>

                </div>
              
                    <input type="hidden" name="product_image" value="<?php echo $info['product_image'];  ?>">
                    <input type="hidden" name="product_name" value="<?php echo $info['product_name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $info['product_price']; ?>">
                    <input type="submit" name="add-cart" value="ADD CART"> 
                      
          </form>

          </div>

        </section>
        <?php
          }
       ?>
    </div>
    
</body>
</html>