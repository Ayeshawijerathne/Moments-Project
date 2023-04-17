
<?php
include('partials-front/menu.php');
?>





<!----------Products-------->



	<div class="items">
			
			<div class="row row-2">
				<h2 class="title"> Products </h2>
		


			<form action="<?php echo SITEURL;?>search_product.php" method="POST">
				<input type="search" name="search" placeholder="Search for Product" required>
				<input type="submit" name="submit" value="search" class="btn">
			</form>
		</div>
	
	<?php
	
	if (isset($_SESSION['order'])) 
	{
	  echo $_SESSION['order']; // display session message
	  unset($_SESSION['order']); // removing session message
	  
	}
	
	?>

		<div class="row">

<?php
//display food that are active


$sql = "SELECT * FROM products WHERE active ='Yes'";

$res = mysqli_query($conn, $sql);

$count = mysqli_num_rows($res);

//check whether the product ia available

if ($count>0) 
{
	//available

	while ($row = mysqli_fetch_assoc($res)) 
	{
		//get values
		$P_id = $row['P_id'];
		$Name = $row['Name'];
		$Price = $row['Price'];
		$image_name = $row['image_name'];

		?>

				<div class="col-4">


				<?php

				//check whether image is available or not

				if ($image_name=="") 
				{
					echo "<div class='error'>Image not available</div>";
				}

				else {
					?>


				<img src="<?php echo SITEURL;?>images/product/<?php echo $image_name?>" width = "150px" height="200px">


					<?php
				}
				
				
				?>
					
					<h3><?php echo $Name;?>  </h3>
					<h5> Rs.<?php echo $Price;?> </h5>
					<div class="rating ">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>


					<a href="cart.php?P_id=<?php echo $P_id?>" class="btn"> Add to cart <i class="fas fa-arrow-circle-right"></i></a>
					
				</div>

		<?php
	}
}

else 
{
	//not available

	echo "<div class='error'>Product not found</div>";
}


?>

				

			

			

			

			

		</div>



				
			

				

				
			

		



		<div class="page-btn">
			<span><<</i></span>
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>>></i></span>


		</div>















		<?php
include('partials-front/footer.php');
?>


