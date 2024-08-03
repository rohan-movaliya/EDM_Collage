<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy wala
    </title>
</head>
<body>
    
</body>
</html>
<?php


    
        $userID=$_GET['userid'];
        $query=mysqli_query($conn,"select * from addtocart where userid='$userID'");

        
        while($row=mysqli_fetch_array($query))
        {
            
            $uid =  $row['userid'];
            
            $proname =  $row['productname'];
            
            $propricre = $row['price'];
            
            $prodescription =  $row['description'];
            
            $prodropdown = $row['dropdown']	;
            
            
        } 
    
        
  	    $userid = mysqli_query($conn,"SELECT `id`  FROM `addtocart` WHERE  userid = '$userID' ");
    
        
        while($row1 = mysqli_fetch_array($userid))
        {
            $uid = $row1['id'];
            $_SESSION['userid'] = $uid;
        
            //$q2 = mysqli_query($conn,"insert into confirmorder (productname,product_id,userid,price,description,dropdown) values ('$proname',$prid,'$uid','$propricre','$prodescription','$prodropdown')");
            $q1 = mysqli_query($conn,"INSERT INTO `confirmorder`(`userid`, `productname`, `price`, `dropdown`, `description`) VALUES ('$userID','$proname','$propricre','$prodropdown','$prodescription')");
            
        }
        $p1=mysqli_query($conn,"delete from addtocart where userid='$userID'");
        echo "<script>
        window.location.href = 'payment.php';
        </script>";

         echo "<script>
         
         </script>";
          
        

?>