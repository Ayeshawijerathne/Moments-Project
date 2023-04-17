
<?php
include('partials-front/menu.php');
?>
<br><br>

<div class="items">
			

<?php
$search= $_POST['search'];




?>
			<div class="row row-2">
				<h2 class="title"> Searched Products on : <a href="" class="text-red"><?php echo $search;?></a></h2>

                
			<form action="<?php echo SITEURL;?>search_product.php" method="POST">
				<input type="search" name="search" placeholder="Search for Product" required>
				<input type="submit" name="submit" value="search" class="btn">
			</form>
		</div>
               
            </div>
               
            <br>
            <br>
            <div class="row ">
                <?php
                //get search keyword

                

                $sql = "SELECT * FROM products WHERE Name LIKE '$search' OR description LIKE '$search'";

                $res = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($res);

                if ($count>0) 
                {
                  //available

                  while($row = mysqli_fetch_assoc($res))

                  {
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
    <h5>Rs.<?php echo $Price;?> </h5>
    <div class="rating ">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
    </div>
</div>



                    <?php
                  }
                }
                else
                {
                    //not available

                    echo "<div class='error'>Your searched product is unavailable.</div>";
                }
                
                
                
                ?>
</div>

</div>
            


<?php
include('partials-front/footer.php');
?>