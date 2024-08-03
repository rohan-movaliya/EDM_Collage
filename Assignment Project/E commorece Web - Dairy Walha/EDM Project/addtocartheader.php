<?php
include('connection.php');
session_start();
// $productname=$_POST['productname']; 
// $price=$_POST['price']; 
// $description=$_POST['description']; 
// $dropdown=$_POST['dropdown'];
$id=$_GET['id'];

$query=mysqli_query($conn,"select * from product where id='$id'");

while($row=mysqli_fetch_array($query))
{
	
      $prid =  $row['id'];
      $proname =  $row['productname'];
      $propricre = $row['price'];
      $prodescription =  $row['description'];
	  $prodropdown = $row['dropdown']	;
	  
} 
	$useremail = $_SESSION['email'];
  	$userid = mysqli_query($conn,"SELECT `id`  FROM `user_form` WHERE  email = '$useremail' ");
	while($row1 = mysqli_fetch_array($userid))
	{
		$uid = $row1['id'];
		$_SESSION['userID'] = $uid;
	
//  $q2="INSERT INTO `addtocart`(`productname`, `price`, `description`, `dropdown`) VALUES ('$proname','$propricre','$prodescription','$prodropdown') where id=$prid";
	 $q2 = mysqli_query($conn,"insert into addtocart (productname,userid,price,description,dropdown) values ('$proname','$uid','$propricre','$prodescription','$prodropdown')");
	}
// echo "$q2";
//  $done = mysqli_query($conn, $q2);


             if($q2)
             {
                   echo "
                         done
                         ";
            }
 		   else{
			echo "not done";
 		   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Dairy wala</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
</head>
<body>
<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/lor5433w21`1w`]
									
									[
										][
											[][go1.png" alt="" style="height:200px;">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search" style="margin-top:70px;">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			
            <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Add To Cart</a></li>
						<li><a href="index.php">Home</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<table class="table">
 
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Descritption</th>
	  <th scope="col">image</th>
	  <th scope="col">Catagory</th>
	  <th scope="col">Quantity</th>
	  <th scope="col">Remove</th>
    </tr>
 <?php
 
//  $productname=$_POST['productname']; 
//  $price=$_POST['price']; 
//  $description=$_POST['description']; 
//  $dropdown=$_POST['dropdown'];
//  $id=$_GET['id'];
  $ID = $_SESSION['userID'];
 $query=mysqli_query($conn,"select * from addtocart where userid = $ID ");
 $i = 1;
 $total = 0;
while($row=mysqli_fetch_array($query))
 {
 ?>
 
<tr>
      <td><?php echo $i ?></td> 
      <td><?php echo $row['productname'];?></td>
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['description'];?></td>
	  <td><img style="height:40px; width: 40px;%;"  src='img/<?php echo $row["product_Image"]; ?>'></td>
	  <td><?php echo $row['dropdown'];?></td>
	  <td><?php echo $row['quantity'];
				$pro = $row['price'] * $row['quantity'];
				$total = $pro + $total;?></td>
				
	  
	  <?php
	  $id = $row['id'];
	  echo "<td><a href='remove.php?id=$id'><button type='button' class='btn btn-danger'>Remove</button></a></td>";
	  
	  ?>
				
	  
	  
</tr>
  <?php
  $i++;
 } 
  ?>

	<div style="float:right;">
 		<h2>Total :- 
			<span><?php echo $total; ?></span>
		</h2>
	</div>
</table>
</body>
</html>
<?php

?>