<?php
if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
echo"<div class='info'>";
echo "My Name Is : <br>";
echo $_SESSION['name'];
echo"</div>";
?>