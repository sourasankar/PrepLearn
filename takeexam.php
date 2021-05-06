<?php

	//session start
	session_start();

	//If user not logged in
    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        die();
    }

	//connection to db
	require "php/conn.php";

	$sql = "SELECT * FROM preplearn_question_category";
	$result = $conn->query($sql);

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

	<!---------- TAKE EXAM FORM ---------->

	<div class="container">
		<div class="row" style="margin: 100px 0;">
			<div class="col-12">
				<div class="card bg-light border-pink font-weight-bold shadow">
  					<div class="card-header bg-pink text-center text-white">Choose Sections and No of Questions to Take Exam</div>
  					<div class="card-body">
  						<form method="post" action="exam.php">
							<?php 
								$i=1;
								while($row = $result->fetch_assoc()){
							?>
						  	<div class="form-check" style="margin:20px 0;">
								<input type="checkbox" class="form-check-input" id="category<?php echo $i; ?>" onclick="check(<?php echo $i; ?>)">
								<label style="transform: translateY(-9px);font-size: 25px;" class="form-check-label" for="category<?php echo $i; ?>"><u><?php echo $row["category_name"]; ?></u></label>
                        	</div>

                            <div class="row">
							<?php 
								$sql2 = "SELECT * FROM preplearn_question_sub_category WHERE category_id=".$row["category_id"];
								$result2 = $conn->query($sql2);
								$j=1;
								while($row2 = $result2->fetch_assoc()){
							?>
                            
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="category<?php echo $i; ?>subCategory<?php echo $j; ?>" name="subcategory[]" value="<?php echo $row2["sub_category_id"]; ?>">
                                        <label class="form-check-label" for="category<?php echo $i; ?>subCategory<?php echo $j; ?>"><?php echo $row2["sub_category_name"]; ?></label>
                                    </div>                          
                                </div> 
							<?php 
								$j++;
								}
								$category[$i-1]=$j-1;
							?>  
                            </div> 
							<?php 
								$i++;
								}
							?>    
							<div style="font-size: 25px;margin:20px 0;">
								<u>Select No of Questions:</u>
								<select id="questioncount" class="form-control" style="width: 100px;display: inline;margin-left:5px;" name="questioncount">
									<option selected>5</option>
									<option>10</option>
									<option>15</option>
									<option>20</option>
								</select>
							</div>         

							<center style="margin-top: 30px;">
                                <button type="submit" class="btn btn-pink "><i class="fas fa-sign-in-alt"></i> Start Test</button>
                            </center>
						</form>    					
  					</div>
  					<!-- <div class="card-footer">
  						
  						
  					</div> -->
				</div>
			</div>			
		</div>		
	</div>

	<!-- footer -->

	<?php  require "php/footer.php"; ?>

	<script>
		var category = [
			<?php
				for($k=0;$k<$i-1;$k++){
					if($k==$i-2){
						echo $category[$k];
					}
					else{
						echo $category[$k].",";
					}	
				}	
			?>
		];

		function check(id){

			if(document.getElementById("category"+id).checked==true){
				for(i=0;i<category[id-1];i++){
					document.getElementById("category"+id+"subCategory"+(i+1)).checked=true;
				}
			}
			else{
				for(i=0;i<category[id-1];i++){
					document.getElementById("category"+id+"subCategory"+(i+1)).checked=false;
				}
			}

		}

	</script>

	<?php 
		//connection to db close
		$conn->close();
	?>

</body>
</html>