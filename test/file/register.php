<?php
if(isset($_POST['register']))
	$usr=htmlentities(trim($_POST['username']));
	$pwd=htmlentities(trim($_POST['password']));
	$fn=htmlentities(trim($_POST['fn']));
	$ln=htmlentities(trim($_POST['ln']));
	$e=htmlentities(trim($_POST['email']));
	$c=htmlentities(trim($_POST['city']));
	if((empty($usr) or str_replace(" ", "",$usr )=='') or
		(empty($fn) or str_replace(" ", "",$fn )=='') or
		(empty($ln) or str_replace(" ", "",$ln )=='') or
		(empty($e) or str_replace(" ", "",$e)=='') or
		(empty($c) or str_replace(" ", "",$c)=='')){
			echo "<div class='error'>Incorrect Data</class>";
	}else{
		$usr=mysqli_real_escape_string($con,$usr);
		$pwd=mysqli_real_escape_string($con,$pwd);
		$fn=mysqli_real_escape_string($con,$fn);
		$ln=mysqli_real_escape_string($con,$ln);
		$e=mysqli_real_escape_string($con,$e);
		$c=mysqli_real_escape_string($con,$c);
		if(ExistUserName($usr)!=0 and ExistEmail($e)!=0){
			if(register($usr,$pwd,$fn,$ln,$e,$c)){
				header("Location;home.php?page=login");
			}else{
				echo "<div class='error'>Cant Sign Up Try again...</class>";
			}
		}else{
			echo "<div class='error'>Email Or USer Name Already Exist...</class>";
		}


	}

?>



<div class="register-class">
	<form method="POST" action="">
			<span><center>register</center></span>
			<hr>
			<input class="register-item-text" type="text" name="username" placeholder="User Name" /><br>
			<input class="register-item-text" type="password" name="password" placeholder="Password"/><br>
			<input class="register-item-text" type="text" name="fn" placeholder="First Name"/><br>
			<input class="register-item-text" type="text" name="ln" placeholder="Last Name"/><br>
			<input class="register-item-text" type="email" name="email" placeholder="Email"/><br>
			<input class="register-item-text" type="text" name="city" placeholder="City"/><br>
			<input class="register-item-submit" type="submit" name="register" value="register" /><br>
	</form>
	
</div>
<style type="text/css">
	.register-item-text{
		margin: 2px auto;
    border-radius: 10px;
    width: 100%;
    height: 35px;
    border: 1px solid;
    font-size: 23px;
    padding: 10px;
	}
	.register-item-submit{
            margin: 9px auto;
    border-radius: 10px;
    width: 100%;
    height: 30px;
    border: 0px solid;
    color: black;
    background-color: #8de04e;
	}
	.register-class{
		width: 30%;
	    margin: auto;
	    background-color: #fbfcfd;
	    opacity: initial;
	    margin-top: 120px;
	}
	.register-class span center{
		width: 100%;
    margin: auto;
    background-color: #fbfcfd;
    margin-top: 0px;
    font-size: 50;
    font-family: cursive;
    margin-bottom: 5px;
    overflow-anchor: visible;
	}
</style>