
<?php
$con=mysqli_connect("localhost","root","root","blog");

$files=scandir('file');
$page=htmlentities($_GET['page']);
if(!empty($_GET['page']) and in_array($page.'.php', $files)){
	include "./func/".$page.".func.php";
	$content = './file/'.$page.'.php';
}else{
	if(!headers_sent()){
		header("Location:home.php?page=login");
	}
}

if(empty($_SESSION['usr']) || empty($_SESSION['pwd'])){
	
		//header("Location:home.php?page=login");
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="script1.js"></script>
	<link rel="stylesheet" type="text/css" href="./style/style.css"></style>
</head>
<body>
<section class="doc">
<?php  include $content; ?>
</section>