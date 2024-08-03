<?php

include('connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
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

<body>
<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row" style="margin-left: 458px;">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo1.png" alt="" style="height:200px;">
								</a>
							</div>
						</div>
						<!-- /LOGO -->


                        <a href="displayCartProduct.php">
						<?php
											$count = 0;
											$UserId = $_SESSION['userID'];
    										$query=mysqli_query($conn,"select * from addtocart where userid = $UserId ");

											while($row = mysqli_fetch_assoc($query))
											{
												$count++;
											}

						?>
                        <span class="glyphicon glyphicon-shopping-cart" style="color:white;margin-left: 315px;margin-top: 90px;"><br><?php echo $count ?></span>
		
                        </a>


						<!-- SEARCH BAR -->
						
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
	  <!-- <th scope="col">Amount</th> -->
	  <th scope="col">Remove</th>
    </tr>
<?php

    $useremail = $_SESSION['email'];
    $userid = mysqli_query($conn,"SELECT `id`  FROM `user_form` WHERE  email = '$useremail' ");
    while($row1 = mysqli_fetch_array($userid))
    {
        $uid = $row1['id'];
        $_SESSION['userID'] = $uid;
    }


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
        <td><img style="height:40px; width: 40px;" alt="image" src='img/<?php echo $row["product_Image"]; ?>'></td>
        <td><?php echo $row['dropdown'];?></td>


         <td>	<!--				<div class='qty-label'>	
									<div class='input-number'>
										<input type='number' id="count" name="qty" style="width: 68px;" value="1" >
										<button type="button" name="plus" id="plus1" onclick="plus()" class='qty-up' style="margin-right: 85px;">+</button>
										<button type="button" name="minus" id="minus1"onclick="minus()" class='qty-down' style="margin-right: 85px;">-</button>
									</div>
								</div> -->
								
								<?php

									if(isset($_POST['plus']))
									{
										
									}
								
								?>
								<?php 
										echo $row['quantity'];
										$pro = $row['price'] * $row['quantity'];
										$total = $pro + $total;
										

								?>
		</td>
              <!-- <td><input type="number" name="amt" value="<?php $total ?>" class="form-control"  style="width: 90px;"/></td>   -->
        
        <?php
        $id = $row['id'];
        echo "<td><a href='remove.php?id=$id'><button type='button' class='btn btn-danger'>Remove</button></a></td>";
        
        ?>
                
        
        
    </tr>
    <?php
    $i++;
    // header("location:index.php?count=$count");
    } 
?>
	
</table>

<div style="float:right;">
<br><br><br>
 		<h4 style="margin-right:95px;">Total :-  
		




			<span style="margin-right: 30px;"><?php echo $total; ?></span>
			<?php
				
					// $UserId = $_SESSION['userID'];
					//  $UserId = $ID;
					
					echo "<a href='confirm.php?userid=$ID' class='btn btn-success' style='height: 50px; width: 133px;' >Confirm Order</a>";
			
				
			?>
		</h4>
		
	</div>
	<script>
	function plus()
	{
		var a = document.getElementById("count").value;
		alert(a);

	}
	function minus()
	{
		var b = document.getElementById("count").value;
		alert(b);
		
	}
</script>
</body>
</html>
<?php
include('index_footer.php');
?>