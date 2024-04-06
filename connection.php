<?php
session_start();
$link=@mysqli_connect('localhost','root','root','chatroom');
if(!$link){
	die("connection Error ...");
}

?>