<?php
include('indexheader.php');

?>

<?php
    $sql = "SELECT * FROM `product` WHERE dropdown = 'bakery'";

    $s1=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_assoc($s1);
       //echo $row['id'];   
       while($row=mysqli_fetch_assoc($s1)){
           $id=$row['id'];
           $productname=$row['productname'];
           $price=$row['price'];
           $description=$row['description'];
           $product_Image=$row['product_Image'];
           $dropdown=$row['dropdown'];
           $oprice=$row['oprice'];

           

           echo "<div class='product' style='max-width:300px; margin:40px 10px'>
                       <div class='product-img'>
                       <a href='product.php?id=$id'> <img src='./img/$product_Image' alt='' style='height: 260px; width: 263px;'></a>
                           
                       </div>
                       <div class='product-body'>
                       <p class='product-category'>$id</p>
                           <p class='product-category'>$dropdown</p>
                           <h3 class='product-name'><a href='#'>$productname</a></h3>
                           <h4 class='product-price'>₹$price <del class='product-old-price'>$oprice</del></h4>
                           
                           <div class='product-rating'>
                               <i class='fa fa-star'></i>
                               <i class='fa fa-star'></i>
                               <i class='fa fa-star'></i>
                               <i class='fa fa-star'></i>
                               <i class='fa fa-star'></i>
                           </div>
                           
                       </div>
                       <div class='add-to-cart'>
                           <a href='cart.php?id=$id'><input type='submit'  name='aa11' class='add-to-cart-btn'  value='addtocart'> </a>
                           
                       </div>
                   </div>";
       }
?>



<?php
include('indexfooter.php');
?>