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
     <h1>Your Product List</h1>
    <?php
          include 'db_conn1.php';

          $sql="SELECT * from products1";
          $query=mysqli_query($conn,$sql);
          while ($info=mysqli_fetch_array($query)) {
            ?>
        <section id="product1" class="product1">
            
          <div class="pro-container1">
            <div class="pro2">
              <img id="img" src="image/<?php echo $info['product_image'] ; ?>" alt="">
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
              <button class="add-cart">Buy Now</button>
            </div>

          </div>

        </section>
        <?php
          }
       ?>
    </div>
    
</body>
</html>