$(document).ready(function(){
		if($("#comments0").css("display")=="none"){
					$("#comments0").fadeIn(100).css("display","table");
					//$(".comments").css("display","table");
					
					

				}else{
					
					$("#comments0").css("display","none");
				}
		$(".clk").click(function(){
				$('button').click(function(){
					console.log(this.attr('title'));
				});
		});
});