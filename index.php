<?php
include('partials-front/menu.php');
?>



				<div class="row">
					<div class="col-2">
						<h1>MOMENTS | PARTY PLANNING </h1>
						<p>MAKE YOUR EVENT THE BEST DAY EVER</p>
						<a href="Products.html" class="btn"> Explore Now <i class="fas fa-arrow-circle-right"></i>
						</a>
					</div>
					<div class="col-2">
						<img src="images/back3.png " >
					</div>

				</div>
			</div>

		</div>



<!--------- Parties ---------->

		<section class="PARTIES">
			<h1 > Parties We Celebrate</h1>

			<p>These are the Occations we should celebrate <br>and <br>these are the functions that we provide essential items.</p>

			<div class="row">
				<div class="PARTIES-col">
					<img src="images/hbd.png">
					<h2> BIRTHDAY PARTY </h2>
					<p>"Celebrate the anniversary of  your beloved one's birth!"<br> Celebration of biethday of your ones.
					</p>
					
				</div>
				
				<div class="PARTIES-col">
					<img src="images/dp.png">
					<h2> DANCE PARTY </h2>
					<p>"Make the world your stage!" <br>A social gathering where dancing is the primary activity. 
					</p>
				</div>

			
				
					<div class="PARTIES-col">
						<img src="images/pp.png">
				
					<h2> PHOOL  PARTY </h2>
					<p>"Cool by the Pool!" <br>Spend a great time along the pool overlooking the beach, mountains or lawns
					</p>

				
				</div>




				</div>

				<a href="Features.html" class="ex-btn"> see more <i class="fas fa-arrow-circle-right"></i>
						</a>

			 
		</section>

		
<!--------Features----->

		<section class="PARTIES">

		<h1 >Categories</h1>
		<p>These are some of the categories we offer services </p>
		
			
		<dsiv class="row">
		<div class="PARTIES-col">
				
				<img src="images/feature1.png"  width="100px" height="250px">
				<h2>FOOD AND BEVERAGES</h2>
			
				
			</div>
			
			
		
			<a href="Products.html" class="fbtn"> see more <i class="fas fa-arrow-circle-right"></i></a>

		
		</div>


		
	
						

			</section>


<!----------Products---------->

			<section class = "PARTIES">

			
		<h1 >Products</h1>
		<p>These are some of the Products you can get </p>

		
		<div class="row">

			


		<?php
		//getting product from db

		$sql2 = "SELECT * FROM products WHERE active='Yes' LIMIT 3";

		//execute

		$res2= mysqli_query($conn, $sql2);

		$count2 = mysqli_num_rows($res2);

		if ($count2 >0) {
			//available
			while($row = mysqli_fetch_assoc($res2))
			{
				$P_id = $row['P_id'];
				$Name = $row['Name'];
				$image_name = $row['image_name'];
				$Price = $row['Price'];

				?>

<div class="PARTIES-col">
		
				<?php 
				//check whether image is available or not
				if ($image_name=="") 
				{
					//available
					echo "<div class='error'>Image is not available </div>";
				}
				else {
					//not available
					?>

					<img src="<?php echo SITEURL;?>images/product/<?php echo $image_name;?>" width="150px" height = "200px">
					<?php
				}
				?>
				
				

					<h3> <?php echo $Name;?> </h3>
					

					<h5> Rs: <?php echo $Price;?> </h5>
			

					<div class="rating ">

						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						</div>
						</div>
				<?php
				
			}
		}
		else {
			
			//not available
			echo "<div class='error'>Product is unavailable</div>";
		}
		
		
		
		?>
		
		





	</div>
</section>




<!--------testimonials--------->

			<section class="testimonials">
		
			<div class="small container ">
			<h1 class="testimonials">What our Users say</h1>
			<p> Make Your Event The Best Day Ever!</p>

			<div class="row">
				<div class="col-3 ">
					<i class="fas fa-quote-left"></i>
					<img src="images/girl.png">
						<p>You are the best! Extremely pleased with quality of work carried out.Highly recommend.</p>
						<div class="rating ">

						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						</div>
						

					<h3>Anne Michle </h3>
				</div>
					
					<div class="col-3">
						<i class="fas fa-quote-left"></i>
						<img src="images/girl2.png">
				
						<p>Its amaizing !!! Great quality work. Product arrived on time.Highly recommend.</p>
						<div class="rating ">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star-half-alt"></i>
					</div>

						
						<h3>Shane </h3>

					</div>
				

				<div class="col-3">
						<i class="fas fa-quote-left"></i>
						<img src="images/boy.png">

				
						<p>Excellent standard of work. Very pleasant.</p>
						
						<div class="rating ">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</div>

					<h3>Jhon Peter </h3>
					</div>


				</div>

			
</div>
		
		
</section>
	







<?php
include('partials-front/footer.php');
?>




		