<?php
    session_start();

    //If user not logged in
    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        die();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $answers = json_decode($_POST["answers"],true);
        $choices = json_decode($_POST["choices"],true);

        //connection to db
	    require "php/conn.php";


    }
    else{
        header("Location: index.php");
        die();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <?php require "php/head.php"; ?> 
	<style>
		body{
			background: url(background/imgpractice.jpg) fixed; 
			background-size: cover;
			background-color: white;	
		}
	</style>
</head>
<body>
	
	<!-- Nav Bar -->

    <?php  require "php/nav.php"; ?>

    <!-- Contents -->

    <div class="container" style="margin-bottom: 80px;">
        <div class="indextext" style="margin-top: 70px;margin-bottom: 50px;text-align: center;">
            <u>Result</u>
		</div>

        <?php             
            $i=1;
			foreach($answers as $questionId => $ans){
                $sql = "SELECT * FROM questions WHERE question_id='$questionId'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
		?>		
        <div class="questionbox">
            <div class="question">
                Q<?php echo $i; ?>. <?php echo $row["question"]; ?>
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div class="options"> 
                    <?php echo $row["option1"]; ?>
                </div>
                <div class="options">
                    <?php echo $row["option2"]; ?>
                </div>
                <div class="options">
                    <?php echo $row["option3"]; ?>
                </div>
                <div class="options">
                    <?php echo $row["option4"]; ?>
                </div>
                <div style="color: #212529;font-weight: bold;font-size: 15px;">Solution Explanation:</div>
            </div>
            <div style="margin: 10px 0 0 40px;">                
                <img src="solutions/<?php echo $row["questionId"]; ?>.png">
            </div>
		</div>
        <?php 
                
            }
            
            //connection to db close
				$conn->close();
        ?>	
        	
    </div>

    

	<!-- footer -->

    <?php  require "php/footer.php"; ?>

</body>
</html>