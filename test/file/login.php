<?php

if(isset($_POST['login'])){
	$usr=htmlentities(trim($_POST['username']));
	$pwd=htmlentities(trim($_POST['password']));
	if(	!empty($usr) and
		!empty($pwd ) and 
		str_replace(' ', '', $usr)!='' and 
		str_replace(' ', '', $pwd)!=''){
			$usr=mysqli_real_escape_string($con,$usr);
			$pwd=mysqli_real_escape_string($con,$pwd);
		if(login($usr,$pwd)==1){
			$_SESSION['usr']=$usr;
			$_SESSION['pwd']=$pwd;
			if (!headers_sent()) {
				header("refresh:3;home.php?page=user&id=".$_SESSION['usr']);
			}
		}
	}else{
		echo "Error de login";
	}
}


?>


<div class="login-class">
	<form method="POST" action="">
			<span><center>Login</center></span>
			<hr>
			<input class="login-item-text" type="text" name="username" placeholder="User Name" /><br>
			<input class="login-item-text" type="password" name="password" placeholder="Password" /><br>
			<input class="login-item-submit" type="submit" name="login" value="Login" /><br>
	</form>
	
</div>
<style type="text/css">
	.login-item-text{
		margin: 2px auto;
    border-radius: 10px;
    width: 100%;
    height: 35px;
    border: 1px solid;
    font-size: 23px;
    padding: 10px;
	}
	.login-item-submit{
            margin: 9px auto;
    border-radius: 10px;
    width: 100%;
    height: 30px;
    border: 0px solid;
    color: black;
    background-color: #8de04e;
	}
	.login-class{
		width: 30%;
	    margin: auto;
	    background-color: #fbfcfd;
	    opacity: initial;
	    margin-top: 120px;
	}
	.login-class span center{
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