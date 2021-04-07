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
</head>
<body>

	<!-- Nav Bar -->

	<?php  require "php/nav.php"; ?> 


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
		
	</div>


	<!-- footer -->

	<?php  require "php/footer.php"; ?>
	

</body>
</html>