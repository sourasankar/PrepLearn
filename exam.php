<?php
    session_start();
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
            <u>Test Exam</u>
        </div>
        <div id="timer">
            Timer
        </div>
		
        <div class="questionbox">
            <div class="question">
                Q1. A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'> 
                    120 metres
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    180 metres
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    324 metres
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#0bab0bba";'>
                    150 metres
                </div>
            </div>
		</div>
		<div class="questionbox">
            <div class="question">
                Q2. A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'> 
                    45 km/hr
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#0bab0bba";'>
                    50 km/hr
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    54 km/hr
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    55 km/hr
                </div>
            </div>
		</div>
		<div class="questionbox">
            <div class="question">
                Q3. The length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is:
            </div>
            <div style="margin: 15px 40px 0 40px;">
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'> 
                    200 m
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    225 m
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#0bab0bba";'>
                    245 m
                </div>
                <div class="options" onclick='this.style.backgroundColor = "#fd1f1fab";'>
                    250 m
                </div>
            </div>
		</div>
		
		
    </div>


	<!-- footer -->

    <?php  require "php/footer.php"; ?>
    
    <script>
        var m = 0;
        var s = 5;
        var mt = "";
        var st = "";
        var f=1;
        var y=-70;
        var timer = document.getElementById("timer");
        var x = setInterval(function(){
            if(s == 1 && m == 0){
                clearInterval(x);
                alert("Your time is over");
                window.location.replace("index.php");
                /*f=0;
                var z = setInterval(function(){
                    if(y==610){
                    y=-70;
                }
                else{
                    y=y+10;
                }
                timer.style.marginTop = y.toString()+"px";
                },5); */       
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
    </script>
    
</body>

</html>