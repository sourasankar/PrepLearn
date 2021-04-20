<?php
    session_start();

	//connection to db
	require "php/conn.php";

	$sql = "SELECT * FROM question_category";
	$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html style="scroll-behavior: smooth;">
<head>
	<title>PrepLearn</title>
	<?php require "php/head.php"; ?>
	<style>
		body{
			background: url(background/imghome.jpg) fixed; 
			background-size: cover;
			background-color: white;	
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
	<script type="text/javascript" src="js/jquery.convform.js"></script>
	<!-- <script type="text/javascript" src="js/custom.js"></script> -->
</head>
<body>

	<!-- Nav Bar -->

	<?php  require "php/nav.php"; ?> 

	<!-- ChatBot -->
	<div class="chat_icon">
		<i class="fa fa-comments" aria-hidden="true"></i>
	</div>

	<div class="chat_box">
		<div class="my-conv-form-wrapper">
			<form action="index.html" method="GET" class="hidden">


			<input type="text" data-conv-question="Hello!!" data-no-answer="true"> 

		<select data-callback="storeState" data-conv-question="How can I help you ??" name="category">
			<option value="forgotPassword">Forget Password</option>
			<option value="howToAccessPractice">How to access Practice</option>
			<option value="howToAccessExam">How to access Exam</option>
			<option value="contactUs">Contact Us</option>
			<option value="aboutUs">About Us</option>
		</select>

		<div data-conv-fork="category">
			<div data-conv-case="forgotPassword">
				<input type="text"  data-conv-question="<a href='https://www.google.com/'>http://forget.php</a>" data-no-answer="true">  
			</div>
			<div data-conv-case="howToAccessPractice">
				<input type="text" data-conv-question="Just visit" data-no-answer="true">
				<input type="text"  data-conv-question="<a href='https://www.google.com/'>http://practice.php</a>" data-no-answer="true">
			<!-- <input type="text" name="companyName" data-conv-question="Please, enter your company name"> --> 
			</div>
			<div data-conv-case="howToAccessExam">
				<input type="text" data-conv-question="Just visit" data-no-answer="true">
				<input type="text"  data-conv-question="<a href='https://www.google.com/'>http://exam.php</a>" data-no-answer="true">
				<input type="text" data-conv-question="Login before exam" data-no-answer="true">
			</div>
			<div data-conv-case="contactUs">
				<input type="text" data-conv-question="9876543210" data-no-answer="true">
			</div>
			<div data-conv-case="aboutUs">
				<input type="text" data-conv-question="we are cool" data-no-answer="true">
			</div>
		</div>

		<select data-conv-question="Do you need any more help ??">
				<option value="yes" data-callback="rollback">Yes</option>
				<option value="no" data-callback="restore">No</option>
		</select> 

		<!-- <input type="text" name="name" data-conv-question="Please, Enter your name">

		<input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

		<input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?"> -->

		<!-- <select data-conv-question="Please Conform">
			<option value="Yes">Conform</option>
		</select> -->

		</form>
		</div>
	</div>
	<!-- ChatBot end -->


	<!-- Contents -->

	<div class="container">

		<div class="indextext" style="margin: 100px 0 40px 0;">
			Make your dreams come true<br> 
			with PrepLearn <img src="logo/logo.png" width="50">
		</div>

		<div>
			<button type="button" onclick="window.scrollBy(0, 200);" class="btn btn-pink" style="box-shadow: 2px 3px 3px 0px rgb(0 0 0 / 34%);">Practice Now <i class="fas fa-user-cog"></i></button>
			<a style="margin-left: 10px; box-shadow: 2px 3px 3px 0px rgb(0 0 0 / 34%);" href="takeexam.php" class="btn btn-pink">Take Exam <i class="fas fa-user-edit"></i></a>
		</div>

		<div style="margin: 70px 0">
			<?php 
				while($row = $result->fetch_assoc()){
			?>
			<div class="categorybox">  
				<div class="categorytext" style="padding-top: 10px;">
					&nbsp; <u><?php echo $row["category_name"]; ?></u>
				</div>
				
				<div>
					<div class="row" style="margin: 0;">
					<?php 
						$sql2 = "SELECT * FROM question_sub_category WHERE category_id=".$row["category_id"];
						$result2 = $conn->query($sql2);
						while($row2 = $result2->fetch_assoc()){
					?>
						<div class="col-6 offset-0 col-md-4 offset-md-0 col-lg-3 offset-lg-0 col-xl-3 offset-xl-0">
							<a href=<?php echo "practice.php?id=".$row2["sub_category_id"]; ?> style="text-decoration: none;"><div class="categoryitem">
								<?php echo $row2["sub_category_name"]; ?>
							</div></a>
						</div>
					<?php } ?>							
					</div>
				</div>
			</div>				
			<?php
			 	}

				//connection to db close
				$conn->close();
				
			?>

		</div>
		<div id="chat-icon" style="width: 100px;
					height: 100px;
					bottom: 0;
					font-size: 50px;
					margin: 0 70px 70px 0;
					padding: 10px;
					right: 0;
					text-align: center;
					position: fixed;
					background-color: #f50057ab;
					border-radius: 50%;
					color:white;">

				<i class="fas fa-comments"></i>
				 
		</div>
		
	</div>


	<!-- footer -->

	<?php  require "php/footer.php"; ?>
	

</body>
</html>