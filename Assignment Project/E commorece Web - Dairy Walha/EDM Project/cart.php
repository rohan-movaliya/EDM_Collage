<?php

include('connection.php');
session_start();

?>

<?php

    $id=$_GET['id'];
        
    $query=mysqli_query($conn,"select * from product where id='$id'");

    while($row=mysqli_fetch_array($query))
    {
        
        $prid =  $row['id'];
        $proname =  $row['productname'];
        $propricre = $row['price'];
        $prodescription =  $row['description'];
        $product_Image =  $row['product_Image'];
        $prodropdown = $row['dropdown']	;
        
    } 

    $useremail = $_SESSION['email'];
  	$userid = mysqli_query($conn,"SELECT `id`  FROM `user_form` WHERE  email = '$useremail' ");


    
	while($row1 = mysqli_fetch_array($userid))
	{
		$uid = $row1['id'];
		$_SESSION['userID'] = $uid;
	
	    $q2 = mysqli_query($conn,"insert into addtocart (productname,product_id,userid,price,description,product_Image,dropdown) values ('$proname',$prid,'$uid','$propricre','$prodescription','$product_Image','$prodropdown')");

        
	}

    echo "<script>
    window.location.href = 'index.php';
    </script>";

?>
