<?php
    session_start();

    //If user not logged in
    if(!isset($_SESSION["email"])){
        header("Location: login.php");
        die();
    }

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
    <title>Exam</title>
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
        <div id="timer">
            Timer
        </div>

        <?php             
			for($j=0;$j<$count;$j++){
		?>		
        <div class="questionbox">
            <div class="question">
                Q<?php echo $j+1; ?>. <?php echo $question[$j]; ?>
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div id="<?php echo $questionId[$j]."option1"; ?>" class="options" onclick='mychoice(<?php echo $questionId[$j]; ?>,1)'> 
                    <?php echo $option1[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option2"; ?>" class="options" onclick='mychoice(<?php echo $questionId[$j]; ?>,2)'>
                    <?php echo $option2[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option3"; ?>" class="options" onclick='mychoice(<?php echo $questionId[$j]; ?>,3)'>
                    <?php echo $option3[$j]; ?>
                </div>
                <div id="<?php echo $questionId[$j]."option4"; ?>" class="options" onclick='mychoice(<?php echo $questionId[$j]; ?>,4)'>
                    <?php echo $option4[$j]; ?>
                </div>
            </div>
		</div>
        <?php 
                
            }
            
            //connection to db close
				$conn->close();
        ?>	
        <form id="exam_form" action="#" method="post">
            <input type="hidden" id="answers" name="answers">
            <input type="hidden" id="choices" name="choices">
        </form>
        <div class="questionbox" style="text-align: center;">
            <button type="button" id="submit_button" class="btn btn-pink" style="width:50%;box-shadow: 2px 3px 3px 0px rgb(0 0 0 / 34%);" onclick="submit()">Submit <i class="fas fa-arrow-circle-right"></i></button>
        </div>
        	
    </div>


	<!-- footer -->

    <?php  require "php/footer.php"; ?>
    
    <script>
        var m = 0;
        var s = 10;
        var mt = "";
        var st = "";
        var f=1;
        var y=-70;
        var timer = document.getElementById("timer");
        var x = setInterval(function(){
            if(s == 1 && m == 0){
                clearInterval(x);
                alert("Your time is over. Answer will be submitted automatically. Click OK");
                //when time is over
                submit();
            }
            if(s != 0 && f!=0){
                s--;
            }
            else if(f!=0){
                m--;
                s=59;
            }
            if(m<10) mt="0";
            if(s<10) st="0";
            else st="";
            timer.innerHTML = mt+m.toString()+":"+st+s.toString();
        },1000);

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

        var choices = {
            <?php 
                for($j=0;$j<$count;$j++){
                    echo "$questionId[$j]".":"."0";
                    if($j!=$count-1){
                        echo ",";
                    }
                }    
            ?>
        };

        function mychoice(questionid,ans){
            if(choices[questionid]!=0){
                document.getElementById(questionid+"option"+choices[questionid].toString()).style.removeProperty("background-color");
                document.getElementById(questionid+"option"+ans).style.backgroundColor="#ff6d00";
            }
            else{
                document.getElementById(questionid+"option"+ans).style.backgroundColor="#ff6d00";
            }
            choices[questionid]=ans;
        }

        function submit(){
            document.getElementById("answers").value=JSON.stringify(answers);
            document.getElementById("choices").value=JSON.stringify(choices);
            //document.getElementById("exam_form").submit();            
        }
    </script>
    
</body>

</html>