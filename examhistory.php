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

	$sql = "SELECT * FROM preplearn_exam_history";
	$result = $conn->query($sql);	

?>


<html>
<head>
	<title>Exam History</title>
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

	<!---------- Contents -------->

	<div class="container">
		<div class="row" style="margin: 100px 0;">
			<div class="col-12">
				<div class="card bg-light border-pink font-weight-bold shadow">
  					<div class="card-header bg-pink text-center text-white">Exam History</div>
  					<div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Sl No.</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Correct Answered</th>
                                    <th scope="col">Wrong Answered</th>
                                    <th scope="col">Not Attempted</th>
                                    <th scope="col">Total Questions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    while($row = $result->fetch_assoc()){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo date("d-M-Y",strtotime($row["date"])); ?></td>
                                    <td><?php echo $row["correct"]; ?></td>
                                    <td><?php echo $row["wrong"]; ?></td>
                                    <td><?php echo $row["not_attempted"]; ?></td>
                                    <td><?php echo $row["count_questions"]; ?></td>
                                </tr>
                                <?php 
                                    $i++;
                                    }

                                    //connection to db close
		                            $conn->close();
                                ?>
                            </tbody>
                        </table>							    					
  					</div>
  					<!-- <div class="card-footer">
  						
  						
  					</div> -->
				</div>
			</div>			
		</div>		
	</div>

	<!-- footer -->

	<?php  require "php/footer.php"; ?>


</body>
</html>