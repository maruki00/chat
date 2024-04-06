<?php


$con=mysqli_connect('localhost','root','root','chat');
if(!$con){
	die("connection Error...");
}

$query='insert into like values('$postid','$usr')';
mysqli_query($con,$query);

?>