<?php
include "./../func/like.func.php";
/*
	$con=mysqli_connect('localhost','root','root','chat');
	if(!$con){
		die("connection Error...");
	}
	$postid=$_GET['postid'];
	$usr=$_SESSION['usr'];
	$query="insert into likes values('$postid','$usr')";
	mysqli_query($con,$query);
	if($res=mysqli_query($con,"select count(*) from likes where idpost='$postid'")){
}
*/
if(isset($_GET['likepost'])){

}

?>

<form method="get">
	<td >	
	<span id="likes">120 </span>Like This <button title="btn" name="likepost"><img src="wjhdg.png"></img></button> 
	<span>
		<span id="comments">120 </span> Comments
	</span>
	<button class="clk">
		<img src="jhgasdh.png">	
	</button>
</td>
</form>
