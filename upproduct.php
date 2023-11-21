<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.cs">
    <title>Document</title>
</head>
<body>
        <div class=" container">
            <div class="form-box">
                <h1 id="title">Upload Product</h1>
                <form method="post" action="upproduct.php" enctype="multipart/form-data">
                    <div class="input-group">


                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input id="product_name" type="text" name="product_name" value="" placeholder="Insert Product Name" required><br>
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input id="product_price" type="text" name="product_price" value="" placeholder="Insert Product Price" required><br>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input id="product_details" name="product_details" rows="20" cols="20" placeholder="Insert Product Deatils" required><br>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input id="product_image" type="file" name="product_image" value="" required><br>
                        </div>

                        

                        <input id="insert" type="submit" name="insert" value="Insert">

                        
                    </div>
                </form>
            </div>
            <?php
          include 'db_conn1.php';

          if (isset($_POST['insert']))
           {
            $product_name=$_POST['product_name'];
            $product_price=$_POST['product_price'];
            $product_details=$_POST['product_details'];
            $image_name=$_FILES['product_image']['name'];
            $image_size=$_FILES['product_image']['size'];
            $image_type=$_FILES['product_image']['type'];
            $image_tem_loc=$_FILES['product_image']['tmp_name'];
            $image_store="image/".$image_name;
            move_uploaded_file($image_tem_loc,$image_store);

            $sql="INSERT INTO products1(product_name,product_price,product_details,product_image)
            values('$product_name','$product_price','$product_details','$image_name')";
            $query=mysqli_query($conn,$sql);
            echo "product Uploaded";

          }
          
      ?>
       </div>
    </body>

</html>