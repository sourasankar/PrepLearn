<?php

	//session start
	session_start();

	//Checking if user is already logged in
	if(isset($_SESSION["email"])){

		//User already logged in redirects to home page
		header("Location: index.php");
		die();
	}

	//unset error msgs
	$status=$emailError=$passError=null;
	
	

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

		if(!isset($_SESSION["otp"])){

			//flag to check error
			$error=0;
			
			//Data comes from login form
			$email=strtolower($_POST["email"]);
			$pass=$_POST["pass"];

			//PHP Validations
			if (!preg_match("/^\w+(\.\w+)*@\w+\.[A-Za-z]+$/",$email) || $email==""){
				$emailError="is-invalid";
	  			$error=1;
			}
			if (!preg_match("/^.{6,20}$/",$pass) || $pass==""){
				$passError="is-invalid";
	  			$error=1;
			}

			//If no error
			if ($error==0) {

				//connection to db
				require "php/conn.php";

				//encrypting password
				$pass=md5($_POST["pass"]);

				//getting password for that user
				$sql = "SELECT password FROM credentials WHERE email='$email'";
				$result = $conn->query($sql);
				if($result->num_rows!=0){
					$row = $result->fetch_assoc();

					//if pass is matched
					if($pass==$row["password"]){

						//user will get otp in email
						//rand(10000000,99999999)
						$_SESSION["otp"]=123456;
						$_SESSION["otpemail"]=$email;
						
						
					}
					//if pass not matched
					else{
						$status="danger";
						$msg='<i class="fas fa-exclamation-triangle"></i> Password Not Matched';
					}
				}

				//if account not found
				else{
					$status="danger";
					$msg='<i class="fas fa-exclamation-triangle"></i> Account Not Found';
				}

				//connection to db close
				$conn->close();
			}	

		}	
		else{
			if($_SESSION["otp"]==$_POST["otp"]){
				$_SESSION["email"]=$_SESSION["otpemail"];		
				unset($_SESSION["otp"]);
				unset($_SESSION["otpemail"]);		
				header("Location: index.php");
				die();
			}
			//if otp not match
			else{
				$status="danger";
				$msg='<i class="fas fa-exclamation-triangle"></i> OTP Do Not Match';
			}
		}			

	}

?>


<html>
<head>
	<title>Login</title>
	<?php require "php/head.php"; ?>
	<style>
		body{
			background: url(background/imglogin.jpg) fixed; 
			background-size: cover;
			background-color: white;	
		}
	</style>
</head>
<body>

	<!-- Nav Bar -->
	
	<?php  require "php/nav.php"; ?>

	<!---------- LOGIN FORM---------->

	<div class="container">
		<div class="row" style="margin: 100px 0;">
			<div class="col-10 offset-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
				<div class="card bg-light border-pink font-weight-bold shadow">
  					<div class="card-header bg-pink text-center text-white">LOGIN</div>
  					<div class="card-body">
  						<form method="post" id="login_form" autocomplete="off" <?php if(!isset($_SESSION["otp"])) echo 'onsubmit="return myLogin()"' ?>>
						<?php 
							if(!isset($_SESSION["otp"])){

						?>
						
	  						<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control <?php echo $emailError; ?>" name="email" id="email" placeholder="Email" title="Enter Valid Email" onkeyup="checkemail()" required>
								<span class="invalid-feedback">
        							Enter Valid Email
      							</span>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control <?php echo $passError; ?>" name="pass" id="pass" placeholder="Password" title="Must be between 6-20" onkeyup="checkpass()" required>
								<span class="invalid-feedback">
        							Must be between 6-20
      							</span>
							</div>
						<?php
							}
							else{
						?>
							<div class="form-group">
								<label>OTP</label>
								<input type="text" class="form-control" name="otp" id="otp" placeholder="OTP" required>
							</div>
						<?php
							}
						?>

							<button type="submit" id="submit_button" class="btn btn-pink form-control"><i class="fas fa-sign-in-alt"></i> Login</button>
						</form>    					
  					</div>
  					<div class="card-footer">
  						<?php 
  						if(isset($status)) echo '<div class="alert alert-'.$status.' text-center" style="margin: 10px auto; padding: 1px 20px;" role="alert">'.$msg.'</div>';
  						else 
  							 echo "Don't have an account? <a href='signup.html' style='color: #f50057;'>Sign Up</a>" ; 

  						?> 
  						
  					</div>
				</div>
			</div>			
		</div>		
	</div>

	<!-- footer -->

	<?php  require "php/footer.php"; ?>
	

	<!-------JAVASCRIPT FOR IDs--------> 

	<script>
		var button=document.getElementById("submit_button");
		var form=document.getElementById("login_form");
		var email=document.getElementById("email");
		var pass=document.getElementById("pass");
	</script>

	<!-------JAVASCRIPT FOR UI INDICATING--------> 

	<script>
		function valid(field){
			field.classList.add("is-valid");
			field.classList.remove("is-invalid");
		}
		function invalid(field){
			field.classList.add("is-invalid");
			field.classList.remove("is-valid");
		}
		function isnull(field){
			field.classList.remove("is-valid");
			field.classList.remove("is-invalid");
		}
		//*****input fields*****
		function checkemail(){
			if(email.value==""){
				isnull(email);
			}
			else if(/^\w+(\.\w+)*@\w+\.[A-Za-z]+$/.test(email.value)){
				valid(email);
			}
			else{
				invalid(email);
			}
		}
		function checkpass(){
			if(pass.value==""){
				isnull(pass);
			}
			else if(/^.{6,20}$/.test(pass.value)){
				valid(pass);
			}
			else{
				invalid(pass);
			}
		}
	</script>

	<!-------JAVASCRIPT FOR LOGIN FORM------->

	<script>
		function myLogin() {
			var error=0;			
			//starts loading.....
			button.innerHTML='<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Logging...';

			setTimeout(function(){ 
				button.innerHTML='<i class="fas fa-sign-in-alt"></i> Login';
				//Javascript validation
				if (!/^\w+(\.\w+)*@\w+\.[A-Za-z]+$/.test(email.value) || email.value=="") {
					invalid(email);
					error=1;
				}
				if(!/^.{6,20}$/.test(pass.value) || pass.value==""){
					invalid(pass);
					error=1;
				}
				//if no error then form submit
				if(error==0){
					form.submit();
				}				
			},2000);
			return false;
		}		
	</script>

</body>
</html>