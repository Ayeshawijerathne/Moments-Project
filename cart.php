
<?php
include('partials-front/menu.php');
?>

 <div class="row">

<h2 class="title"> Cart Details</h2>

</div>

	<?php 
	 //check P_Id set or not

	 if (isset($_GET['P_id'])) 
	 {
		//get details
		$P_id = $_GET['P_id'];

		$sql = "SELECT * FROM products WHERE P_id = $P_id ";

		$res = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($res);

		if($count==1)
		{
			$row= mysqli_fetch_assoc($res);

			$Name = $row['Name'];
			$description = $row['description'];
			$Price = $row['Price'];
			$image_name = $row['image_name'];

		}

		else
		{
			header("location:".SITEURL);
		}
	 }

	 else {
		//redirect

		header("location:".SITEURL);
	 }
	
	
	?>			



<!----------cart item detalis------------->


<div class=" cart-page">

			<table>
				<tr>
					
					<th> Product </th>
					<th> Description </th>
					<th> Quantity </th>
					<th> Sub Total </th>


				</tr>

				

				<tr>
					
					<td> 
						<div class="cart-info">


						<?php
						
	 						if ($image_name== "") 
							{
								echo "<div class='error'> Unavailable</div>";
							}
							else
							{
								?>

							<img src="<?php echo SITEURL;?>images/product/<?php echo $image_name?>" width = "150px" height="200px">

								<?php
							}
						?>
						
							<div>
								<p> <?php echo $Name ;?></p>

								<input type="hidden" name="Items" value = "<?php echo $Name;?>">

								<small> Rs.<?php echo $Price;?></small>

								<input type="hidden" name="Price" value = "<?php echo $Price;?>">
								<br>
								<a href=""> Remove</a>
							</div>
							
						



					</td>
	
	 				<td> <?php echo $description;?></td>
					
				

					
					<td> 
							 <input type="hidden" name="total" value = "<?php echo $total;?>"> </td>
				</tr>
				

						</div>



	</table>


	
		

	<div class="total-price">

		
			<table class="total">
				

				

				<tr>
					<td> Sub total</td>
					
				</tr>




			</table>

	
	</div>
	
	</div>
			
	

	<div class="row">
	<form action="" method="POST" class="cart">
            <table class = "tablecart">


				<tr>
					<td>
						Name :
					</td>
					<td>
					<input type="text" name="Cus_Name" placeholder=" Enter your Name"> 
					</td>
				</tr>


				<tr>
					<td>
						Contact Details :
					</td>
					<td>
					<input type="text" name="contact_details" placeholder="Enter phone number"> 
					</td>
				</tr>


				<tr>
					<td>
						Email :
					</td>
					<td>
					<input type="text" name="email" placeholder="Enter E-mail"> 
					</td>
				</tr>


				<tr>
					<td>
						Address :
					</td>
					<td>
					<input type="text" name="address" placeholder="Enter Address"> 
					</td>
				</tr>
				<tr>
					<td>
						Payment Method :
					</td>
					<td>
					<input type="radio" name="payment_method" value="on"> online
                    <input type="radio" name="payment_method" value="COD"> cod
                </td>
				
				<tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="confirm order" class="orderbtn">
                </td>
              
            </tr>

				
	</table>

	
	</form>









	<?php
	
	if (isset($_POST['submit'])) 
	{
		$Items = $_POST['Name'];
		//$quan = $_POST['quan'];
		//$Price = $_POST['Price'];
		

		//$total = $price * $quan;

		$order_date = date("y:m:d h:m:sa");

		$status = "Ordered";


		$Cus_Name = $_POST['Cus_Name'];

		$contat_details = $_POST['contact_details'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$payment_method =$_POST['payment_method'];
		








		$sql2 = "INSERT INTO cart SET
		Items='$Name',
		
	
		order_date='$order_date',
		status = '$status',
		Cus_Name = '$Cus_Name',
		contact_details='$contat_details',
		email = '$email',
		address = '$address',
		payment_method = '$payment_method'
		
		
		
		";


		echo $sql2;
		die();

	$res2 = mysqli_query($conn,$sql2);

	if($res2==TRUE)
	{
		$_SESSION['order']= "<div class='success'> Order placed scuccessfully</div>";
		header("location:".SITEURL.'Products.php');
	}
	else
	{
		$_SESSION['order']= "<div class='error'> Failed to place order</div>";
		header("location:".SITEURL.'Products.php');
	}

		

	}
	?>
	










	</div>	
				</div>
				

				
			</div>

</div>

<?php
include('partials-front/footer.php');
?>

