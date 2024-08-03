<?php
include('heder.php');
?>
<?php
$conn=mysqli_connect('localhost','root','','onlinedairysystem');

    if(!$conn)
    {
         echo "error..".mysqli_connect_errorno();
    }
    else
    {
                  $productname=$_POST['productname']; 
			      $price=$_POST['price']; 
                  $description=$_POST['description']; 
			      $dropdown=$_POST['dropdown'];
                  $oprice=$_POST['oprice'];
                  $image = $_FILES['f1']['name'];  //echo karvo hoi to karvano
                  $img = $_FILES['f1']['tmp_name'];  //echo karvo hoi to karvano
                  move_uploaded_file($img,'move/'.$image);
                   
            $q1="INSERT INTO `product`( `productname`, `price`, `description`, `product_Image`, `dropdown`, `flag`,`oprice`) VALUES ('$productname',$price,'$description','$image','$dropdown',0,'$oprice')";
            
            $done=mysqli_query($conn,$q1);
            if($done)
            {
                  echo "
                        <script>
                            window.location.href = 'dashboard.php';
                        </script>
                        ";
           }
           else{
            echo "error.....";
           }
           


              
                 
    }


?>
<?php

include('footer.php');

?>
