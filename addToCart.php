<?php
 include 'db_conn1.php';
if(isset($_POST['update_product_quantity'])){
  $update_value =$_POST['update_quantity'];
  $update_id = $_POST['update_quantity_id'];
  
  $sql1 = "UPDATE `cart` SET `quantity`='$update_value' where id=$update_id";
  $select_cart=mysqli_query($conn,$sql1);
  echo "Update Successfully Done";

}


  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/addToCart.css">
</head>
<body>
    <div class="container">
        <section class="shopping_cart">
            <table>
                
                <?php 
                include 'db_conn1.php';
                $select_cart_product=mysqli_query($conn,"SELECT * FROM `cart`");
                $num=1;
                if(mysqli_num_rows($select_cart_product)>0){
                    echo "   <thead>
                    <th>SL No</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>";
                while($info1=mysqli_fetch_assoc($select_cart_product)){
                    ?>
                    <tr>
                        <td><?php echo $num?></td>
                        <td><?php echo $info1['name'] ;?></td>
                        <td><img src="image/<?php echo $info1['image'] ;?>" alt=""></td>
                        <td><?php echo $info1['price'] ;?></td>
                        <td><form method="post" action="#">
                            <input type="hidden" name="update_quantity_id" value="<?php echo $info1['id'] ;?>">
                            <div class="quantity_box">
                             <input type="number" min="1" value="<?php echo $info1['quantity'] ;?>" name="update_quantity">
                             <input type="submit" class="update_quantity" value="Update" name="update_product_quantity"> 
                            </div>

                        </form>
                </td>
                        <td><?php echo $info1['price'] + 80 ;?></td>
                        <td>Remove</td>
                    </tr>
               <?php
               $num++;
                }
                }
                else{
                    echo "no product";
                }
                ?>
                       
                </tbody>
            </table>

            <div class="table_bottom"> 
                <a href="disproduct.php" class="bottom_btn">Continue Shopping</a>
                <h3 class="bottom_btn">Grand Total <span>2500</span></h3>
                <a href="#" class="bottom_btn">Check Out</a>
            </div>
            <a class="delete_all_btn">
            <i class="fas fa=trash"></i>Delete All
            </a>
        </section>
    </div>
</body>
</html>