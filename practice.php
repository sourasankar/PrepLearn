<?php
    session_start();

    //connection to db
	require "php/conn.php";
    $sub_category_id = $_GET["id"];

	$sql = "SELECT * FROM questions WHERE sub_category_id='$sub_category_id'";
	$result = $conn->query($sql);
    $count=0;
    while($row = $result->fetch_assoc()){
        $questionId[$count]=$row['question_id'];
        $ans[$count]=$row["answer"];
        $question[$count]=$row["question"];
        $option1[$count]=$row["option1"];
        $option2[$count]=$row["option2"];
        $option3[$count]=$row["option3"];
        $option4[$count]=$row["option4"];
        $count++;
    }
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
			for($j=0;$j<$count;$j++){
		?>		
        <div class="questionbox">
            <div class="question">
                Q<?php echo $j+1; ?>. <?php echo $question[$j]; ?>
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div id="<?php echo $questionId[$j]."option1"; ?>" class="options" onclick='answer("<?php echo $questionId[$j]."option1"; ?>",<?php echo $questionId[$j]; ?>,1)'> 
                    <?php echo $option1[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option2"; ?>" class="options" onclick='answer("<?php echo $questionId[$j]."option2"; ?>",<?php echo $questionId[$j]; ?>,2)'>
                    <?php echo $option2[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option3"; ?>" class="options" onclick='answer("<?php echo $questionId[$j]."option3"; ?>",<?php echo $questionId[$j]; ?>,3)'>
                    <?php echo $option3[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option4"; ?>" class="options" onclick='answer("<?php echo $questionId[$j]."option4"; ?>",<?php echo $questionId[$j]; ?>,4)'>
                    <?php echo $option4[$j]; ?>
                </div>
                <a href="javascript:void(0)" style="color: #212529;font-weight: bold;font-size: 15px;" onclick="view_answer(<?php echo $questionId[$j]; ?>)">View Answer</a>
            </div>
            <div id="<?php echo $questionId[$j]; ?>" style="margin: 10px 0 0 40px;display: none;">                
                <img src="solutions/<?php echo $questionId[$j]; ?>.png">
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

    <script>
        var answers = {
            <?php 
                for($j=0;$j<$count;$j++){
                    echo "$questionId[$j]".":"."$ans[$j]";
                    if($j!=$count-1){
                        echo ",";
                    }
                }    
            ?>
        };
        var flag = {
            <?php 
                for($j=0;$j<$count;$j++){
                    echo "$questionId[$j]".":"."0";
                    if($j!=$count-1){
                        echo ",";
                    }
                }    
            ?>
        };
        function view_answer(id){
            if(document.getElementById(id).style.display=="none"){
                document.getElementById(id).style.removeProperty("display");
            }
            else{
                document.getElementById(id).style.setProperty("display","none");
            }            
        }
        function answer(optionid,id,option){
            //if(answers[id]==option){
                document.getElementById(optionid).style.setProperty("backgroundColor","#0bab0bba");
            //}
            //else{
              //  document.getElementById(optionid).style.setProperty("backgroundColor","#fd1f1fab");
           // }
        }
    </script>
    
</body>
</html>