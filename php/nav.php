<script>
		function myMenu(){
			if (document.getElementById("nav-menu").style.width=="0px") {
				document.getElementById("nav-menu").style.width="60%";
			}
			else{
				document.getElementById("nav-menu").style.width="0px";
			}		
		}
	</script>
	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="index.php" style="font-weight: bold;"><img src="logo/logo.png" width="30" height="30" class="d-inline-block align-top"></i> PrepLearn</a>
			<button class="navbar-toggler" type="button" onclick="myMenu()" onblur='document.getElementById("nav-menu").style.width="0px"'>
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse">
			    <ul class="navbar-nav ml-auto">
			    	<?php if (!isset($_SESSION["email"])) { ?> 
			      	<li class="nav-item">
			        	<a class="nav-link" href="signup.php"><i class="fas fa-user"></i> Sign Up</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
			      	</li>
			      	<?php } 
					else{ ?>
					<li class="nav-item dropdown">
					    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> <?php echo $_SESSION["email"] ?>
					    </a>
					    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					        <!-- <a class="dropdown-item" href="changepass.php"><i class="fas fa-user-cog"></i> Change Password</a> -->
					        <a class="dropdown-item" href="php/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
					    </div>
					    </li>
					<?php } ?> 
			    </ul>
			</div>	  	
		</div>
	</nav>
	<div class="nav-menu" id="nav-menu" style="width: 0px;">
			    	
		<?php if (!isset($_SESSION["email"])) { ?>

		<a class="nav-link menu-icon" href="index.php">
			<div style="text-align: center;color: white;font-size: 30px;"><i class="fas fa-home"></i></div>
				HOME
		</a>	      			
		<a class="nav-link" href="signup.php"><i class="fas fa-user"></i> Sign Up</a>
		<a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
			      
		<?php } 
		else{ ?>							
							
		<a class="nav-link menu-icon" href="home.php" style="background-color: #243d51;">
			<div style="text-align: center;color: white;font-size: 30px;"><i class="fas fa-user"></i></div>
			<?php echo $_SESSION["email"] ?>
		</a>
		<!-- <a class="nav-link" href="home.php?p=1"><i class="fas fa-history"></i> Past Plans</a>
		<a class="nav-link" href="changepass.php"><i class="fas fa-user-cog"></i> Change Password</a> -->
		<a class="nav-link" href="php/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
		
		<?php } ?> 
			    	
	</div>