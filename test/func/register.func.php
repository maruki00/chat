<?php
function register($a,$b,$c,$d,$e,$f){
	$is=false;
	$b=md5(sha1($b));
	$con=mysqli_connect("localhost","root","root","sn1") or die("error connction");
	$query="insert into users values('$a','$b','$c','$d','$e','$f')";
	 if(mysqli_query($con,$query)){
	 	$is= true;
	 }else{
	 	$is= false;
	 }
	 mysqli_close($con);
	 return $is;
}

function ExistUserName($a){
	$count=-1;
	$con=mysqli_connect("localhost","root","root","sn1") or die("error connction");
	$query="select count(*) from users where username='$a'";
	$res=mysqli_query($con,$query);
	$count= mysqli_num_rows($res);
	mysqli_close($con);
	return $count;
}



function ExistEmail($a){
	$count=-1;
	$con=mysqli_connect("localhost","root","root","sn1") or die("error connction");
	$query="select count(*) from users where email='$a'";
	$res=mysqli_query($con,$query);
	$count= mysqli_num_rows($res);
	mysqli_close($con);
	return $count;
}



?>