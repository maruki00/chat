<?php
if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
if(isset($_POST['send'])){
	if(str_replace(" ", "",$_POST['name'])){
		$_SESSION['name']=htmlentities(trim($_POST['name']));
		header("Location:index.php?page=chatroom");
	}else{
		echo "<script>alert('Cant Chatting With An Empty Nick Name');</script>";
	}
		
}


?>

<form action="" method="post">
	Enter Your Name : <br><input type="text" name="name">
	<input type="submit" name="send">
</form>