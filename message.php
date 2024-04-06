<?php
if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
echo '<div class="send"><form method="post" action="">
		Enter Your Message Here : <br>
		<textarea placeholder="Your Message...." name="msg"></textarea><br>
		<input type="submit" name="send" ></form>
	</div>';
	
if(isset($_POST['send'])){
	if(str_replace(" ", "",$_POST['msg'] )!=''){
		$msg=htmlentities(trim($_POST['msg']));
		$msg=mysqli_real_escape_string($link,$msg);
		$usr=$_SESSION['name'];
		$query="insert into message(message,username) values('$msg','$usr')";
		mysqli_query($link,$query);
	}else{
		echo "<script>alert('Cant Send An Empty Message');</script>";
	}
}

?>