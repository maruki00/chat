<?php

function login($a,$b){
	$count =-1;
	$b=md5(sha1($b));
	$con=mysqli_connect("localhost","root","root","sn1") or die("error connction");
	$query="select * from users where username='$a' and pwd ='$b'";
	$res=mysqli_query($con,"select * from users where username='$a' and pwd ='$b'");
	if($res){
		$count=mysqli_num_rows($res);
		mysqli_free_result($res);
	}else{
		die("Error...");
	}
	mysqli_close($con);
	return $count;
}


?>