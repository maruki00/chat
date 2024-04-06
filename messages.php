<?php
if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
echo "<div class='msgs' id='txtHint'>";
$query="select * from (select * from message order by dtsend desc limit 20) as msg order by dtsend asc";
if($result=mysqli_query($link,$query)){
	while ($row=mysqli_fetch_row($result)) {
		if($row[3]==$_SESSION['name']){
			echo "<span class='b'>".$row[2]."   |    [ You ]  say :   ". $row[1]."</span><br>";
		}
		else{
			echo "<span class='a'>".$row[2]."   |    [".$row[3]."]  say :   ".$row[1]."</span><br>";
		}
		
	}
	mysqli_free_result($result);
}
echo '</div>';
?>