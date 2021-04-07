<?php

	//session start
	session_start();

	//If user not logged in
    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        die();
    }


	if ($_SERVER["REQUEST_METHOD"] == "POST"){

					

	}

?>


<html>
<head>
	<title>Take Exam</title>
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
			<div class="col-12">
				<div class="card bg-light border-pink font-weight-bold shadow">
  					<div class="card-header bg-pink text-center text-white">Take Exam</div>
  					<div class="card-body">
  						<form method="post" action="">

                            <div class="row">
                            
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>                          
                                </div><div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>                          
                                </div><div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>                          
                                </div><div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>                          
                                </div><div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>                          
                                </div>                           
                          
                            </div>              

							<center style="margin-top: 30px;">
                                <button type="submit" class="btn btn-pink "><i class="fas fa-sign-in-alt"></i> Start Test</button>
                            </center>
						</form>    					
  					</div>
  					<div class="card-footer">
  						
  						
  					</div>
				</div>
			</div>			
		</div>		
	</div>

	<!-- footer -->

	<?php  require "php/footer.php"; ?>

</body>
</html>