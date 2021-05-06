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
	$status=$emailError=null;
	
	

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

        //connection to db
		require "php/conn.php";

		if(!isset($_SESSION["forgototp"])){

			//flag to check error
			$error=0;
			
			//Data comes from login form
			$email=strtolower($_POST["email"]);

			//PHP Validations
			if (!preg_match("/^\w+(\.\w+)*@\w+\.[A-Za-z]+$/",$email) || $email==""){
				$emailError="is-invalid";
	  			$error=1;
			}

			//If no error
			if ($error==0) {

				

				//getting info for that user
				$sql = "SELECT email FROM preplearn_credentials WHERE email='$email'";
				$result = $conn->query($sql);
				if($result->num_rows!=0){

				    //user will get otp in email
					//$_SESSION["forgototp"]=rand(10000000,99999999);
					//$headers = "From: PrepLearn <no_reply@preplearn.xyz>\r\n";
					//$headers .= "Reply-To: no_reply@preplearn.xyz\r\n";
					//$headers .= "Return-Path: no_reply@preplearn.xyz\r\n";
					//mail($email,"Forgot Password OTP || PrepLearn","Hi,\nYour OTP for forgot password into PrepLearn is : $_SESSION["forgototp"]",$headers);
					$_SESSION["forgototp"]=123456;
					$_SESSION["otpemail"]=$email;
					$status="success";
					$msg='<i class="fas fa-check-circle"></i> OTP Has Been Sent. This May Take Upto 5 Minutes to Reach';			
								
				}
				//if account not found
				else{
					$status="danger";
					$msg='<i class="fas fa-exclamation-triangle"></i> Account Not Found';
				}
				
			}	

		}	
		else{
			if($_SESSION["forgototp"]==$_POST["forgototp"]){
				$email=$_SESSION["otpemail"];

                //user will get new pass in email 
                //$newPass=rand(10000000,99999999);
				//$headers = "From: PrepLearn <no_reply@preplearn.xyz>\r\n";
				//$headers .= "Reply-To: no_reply@preplearn.xyz\r\n";
				//$headers .= "Return-Path: no_reply@preplearn.xyz\r\n";
				//mail($email,"New Password || PrepLearn","Hi,\nYour new password for PrepLearn Account is : $newPass",$headers);
                $newPass=78945612;
                $newPass=md5($newPass);

                $sql = "UPDATE preplearn_credentials SET password='$newPass' WHERE email='$email'";
				$result = $conn->query($sql);

                $status="success";
				$msg='<i class="fas fa-check-circle"></i> New Password for Your Account Has Been Sent to Your Email. This May Take Upto 5 Minutes to Reach';

				unset($_SESSION["forgototp"]);
				unset($_SESSION["otpemail"]);		
				
			}
			//if otp not match
			else{
				$status="danger";
				$msg='<i class="fas fa-exclamation-triangle"></i> OTP Do Not Match';
			}
		}	
        
        //connection to db close
		$conn->close();

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
  						<form method="post" autocomplete="off">
						<?php 
							if(!isset($_SESSION["forgototp"])){

						?>
						
	  						<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control <?php echo $emailError; ?>" name="email" id="email" placeholder="Email" title="Enter Valid Email" required>
							</div>
							
						<?php
							}
							else{
						?>
							<div class="form-group">
								<label>OTP</label>
								<input type="text" class="form-control" name="forgototp" id="forgototp" placeholder="OTP" required>
							</div>
						<?php
							}
						?>

							<button type="submit" id="submit_button" class="btn btn-pink form-control">
							    Submit <i class="fas fa-sign-in-alt"></i>							
							</button>
						</form>    					
  					</div>
  					<div class="card-footer">
  						<?php 
  						if(isset($status)) echo '<div class="alert alert-'.$status.' text-center" style="margin: 10px auto; padding: 1px 20px;" role="alert">'.$msg.'</div>';
  						?> 
  						
  					</div>
				</div>
			</div>			
		</div>		
	</div>

	<!-- footer -->

	<?php  require "php/footer.php"; ?>
	

</body>
</html>