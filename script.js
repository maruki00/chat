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