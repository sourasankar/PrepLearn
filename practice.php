<?php
    session_start();

    //connection to db
	require "php/conn.php";
    $sub_category_id = $_GET["id"];

	$sql = "SELECT * FROM questions WHERE sub_category_id='$sub_category_id'";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problems on Train</title>
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
            <?php 
                $sql2 = "SELECT * FROM question_sub_category WHERE sub_category_id='$sub_category_id'";
                $result2 = $conn->query($sql2);
                $row2 = $result2->fetch_assoc();
            ?>
            <u><?php echo $row2["sub_category_name"]; ?></u>
		</div>

        <?php 
            $i=1;
			while($row = $result->fetch_assoc()){
                $ans = $row["answer"];
		?>		
        <div class="questionbox">
            <div class="question">
                Q<?php echo $i; ?>. <?php echo $row["question"]; ?>
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div class="options" onclick='this.style.backgroundColor = "<?php  echo ($ans==1)?("#0bab0bba"):("#fd1f1fab");?>";'> 
                    <?php echo $row["option1"]; ?>
                </div>
                <div class="options" onclick='this.style.backgroundColor = "<?php  echo ($ans==2)?("#0bab0bba"):("#fd1f1fab");?>";'>
                    <?php echo $row["option2"]; ?>
                </div>
                <div class="options" onclick='this.style.backgroundColor = "<?php  echo ($ans==3)?("#0bab0bba"):("#fd1f1fab");?>";'>
                    <?php echo $row["option3"]; ?>
                </div>
                <div class="options" onclick='this.style.backgroundColor = "<?php  echo ($ans==4)?("#0bab0bba"):("#fd1f1fab");?>";'>
                    <?php echo $row["option4"]; ?>
                </div>
            </div>
		</div>
        <?php 
                $i++;
            }
            
            //connection to db close
				$conn->close();
        ?>	
        	
    </div>

    

	<!-- footer -->

    <?php  require "php/footer.php"; ?>
    
</body>
</html>