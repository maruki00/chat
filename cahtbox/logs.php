<?php


$con=mysqli_connect('localhost','root','root','chat');



$res=mysqli_query($con,"select * from msg order by id desc");

while($row=mysqli_fetch_assoc($res)){
	echo $row['uname'].'                      |        '.$row['msg'].'<br/>';
}


?> 