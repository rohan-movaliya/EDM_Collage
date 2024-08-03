<?php
include('index_header.php');
?>
		<!-- /BREADCRUMB -->
        <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
                        <li><a href="index.php">Back</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
                    <?php
                         $id=$_GET['id'];
                         $query=mysqli_query($conn,"select * from product where id='$id'");

                         while($row=mysqli_fetch_array($query))
                         {
                             
                             
                             // $proname =  $row['productname'];
                             
                             // $propricre = $row['price'];
                             
                             // $prodescription =  $row['description'];
                             
                             // $prodropdown = $row['dropdown']	;


                                         $productname=$row['productname'];
                                         
                                         $price=$row['price'];
                                         
                                         $description=$row['description'];
                                         
                                         $product_Image=$row['product_Image'];
                                         $dropdown=$row['dropdown'];
                                         
                                         $oprice=$row['oprice'];
                                         
                             
                             
                         } 
                    
					echo "<div class='col-md-5 col-md-push-2'>
						
							<div class='product-preview'>
								<img src='./img/$product_Image' alt='img' style='height: 361px; margin-top: 59px; width: 322px;'>
							</div>
						
					</div>";
                    ?>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							

							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
                    <?php
                               
                            
					    echo "<div class='product-details'>
                            
							<h2 class='product-name' style='margin-top: 100px;'>$productname</h2>
							
							<div>
								<h3 class='product-price'>$price <del class='product-old-price'>$oprice</del></h3>
							</div>
							<p>$description.</p>


						<div class='add-to-cart'>
							<div class='qty-label'>	
								<div class='input-number'>
									<input type='number' id='count' name='qty' style='width: 68px;' value='1' >
									<button type='button' name='plus' id='plus1' onclick='plus()' class='qty-up' style='margin-right: 85px;'>+</button>
									<button type='button' name='minus' id='minus1' onclick='minus()' class='qty-down' style='margin-right: 85px;'>-</button>
									
								</div>
							</div>
								<a href='cart.php?id=$id'><input type='submit'  name='aa11' class='add-to-cart-btn'  value='addtocart'> </a>
						</div>

							

							<ul class='product-links'>
								<li><b>Catagory : </b></li>
								<li>$dropdown</li>
							</ul>

							

						</div>
					</div>";
                    
                    ?>
					<!-- /Product details -->

					<!-- Product tab -->
					
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		
		<!-- /Section -->

		<!-- NEWSLETTER -->
		
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script>
			function plus()
			{
				
					var a11 = document.getElementById('count').value;
					
					a11++;
					alert(a11);
					
					

			}
			</script>
			<?php
						$a1="<script>document.writeln(a11);</script>";
						echo $a1;
					?>
			<script>
			function minus()
			{
				var b = document.getElementById('count').value;
				b--;
				alert(b);
				
			}
		</script>
		
	</body>
</html>
<?php
include('index_footer.php');
?>