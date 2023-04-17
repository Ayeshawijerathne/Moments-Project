
<?php
include('partials-front/menu.php');
?>

<!------------------- Account ----------------->


		<

			<div class="container">
				<div class="row">
					<div class="col-2">
						<img src="images/background.png" width="100%">

					</div>

					<div class="form-container ">
						
							<div class="form-btn">
								<span onclick="Login()"> Login      </span>
								<span onclick="Register()"> Register  </span>
								<hr id="Indicator">
							</div>

							<form id="LoginForm">
								<input type="text" placeholder ="User name">
								<input type="password" placeholder="Password">
								<button type="submit" class="btn"> Login </button>
								<br>
								<a href=""> Forgot password  </a>
								
							</form>


							
								
								<a href="user_login.php" ><button type="submit" class="btn"> as a Coustomer </button></a>
								<a href="Registration.php">
									<button type="submit" class="btn"> as a Business Owner </button>
								</a>
								
							</div>
						
					</div>

				</div>
			</div>
			


		






			
<?php
include('partials-front/footer.php');
?>



<!---------JavaScript for Toggle Form------>

<script type="text/javascript" >
	
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");

	function Register(){
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(150px)";

	}


	function Login(){
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(0px)";

	}









		