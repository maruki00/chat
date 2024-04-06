<?php 
		include "connection.php" ;
		$page =htmlentities(trim($_GET['page']));
		$pg=array("login","logout","chatroom");
		$pages=scandir("./");
		//and str_replace(' ','',$_GET['page'])==NULL
		if(!empty($page) and in_array($_GET['page'].".php", $pages)){
			$content= $_GET['page'].".php";
		}else{
			header("Location:index.php?page=login");
		}
		if(isset($_SESSION['name']) and $_GET['page']!='chatroom'){
			header("Location:index.php?page=chatroom");
		}
		if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
				
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page;?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body align="center">
<div class="bd">
	<div class="menu">
		<ul>
		<li id="home"><a href="index.php?page=<?php echo $_SERVER['PHP_SELF'];?>">Home</a></li>
		<?php 
		if(isset($_SESSION['name'])){
			echo '<li class="sub-menu" id="logout"><a href="index.php?page=logout">Log Out</a></li>';
		}?>
		</ul>
	</div>
	<div class="cotenu">
		<?php include $content;?>
	</div>
</div>

