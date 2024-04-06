<?php
if(explode("/",$_SERVER['SCRIPT_NAME'])[2]!='index.php'){
			header("Location:index.php?page=login");
		}
if(isset($_SESSION['name'])){

}else{
	header("Location:index.php?page=login");
}

?>


<div class="all">
<?php include "sidebar.php";?>
<div class="msg">
		<?php include "messages.php";?>
		<?php include "message.php";?>
</div>
</div>