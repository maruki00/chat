function getPage(){
			var xmlHttp;
			if(windows.XMLHttpRequist)
			{
				xmlHttp=new XMLHttpRequist();
			}else{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlHttp.onreadystatechange=function(){
					if(xmlHttp.readyState==4&xmlHttp.status==200){
							document.getElementById("messagesid").innerHTML=xmlHttp.responseText;
					}
					xmlHttp.open("POST","chatroom.php",true);
					xmlHttp.send();
			}
		}

function test(){
	if (forme1.msg.value==='' || forme1.uname.value==='') {
		alert('username or msg invalide ...');
		return;
	}
	var uname=forme1.uname.value;
	var msg=forme1.msg.value;
	forme1.uname.readOnly=true;
	forme1.uname.style.border='none';
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();
}
$(document).ready(function(){
	$.ajaxSteup({cache:false});
	setInterval(function(){
		$('#chatlogs').load('logs.php');},2000);
});





function addlike(){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById('likes').innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();
}