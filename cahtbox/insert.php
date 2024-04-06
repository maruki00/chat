<?php

$uname=$_REQUEST['uname'];
$msg=$_REQUEST['msg'];
$con=mysqli_connect('localhost','root','root','chat');

mysqli_query($con,"insert into msg(uname,msg) values('$uname','$msg')");

$res=mysqli_query($con,"select * from msg");

while($row=mysqli_fetch_assoc($res)){
	echo $row['usr'].'     '.$row['msg'].'<br/>';
}


?> 