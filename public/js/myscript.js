$(document).ready(function(){
	$("#btn-login").click(function () {
		$("#div-choices").hide();
    	$("#div-login-form").css({"visibility":"initial",
    							  "display":"initial"
    							});
    });

	$("#btn-register").click(function () {
		$("#div-choices").hide();
    	$("#div-register-form").css({"visibility":"initial",
    							  "display":"initial"
    							});
    });
});

$(function(){
	$("#btn-back").click(function(){
		$("#div-login-form").hide();
		$("#div-register-form").hide();
		$("#div-choices").show();
	});	
});
	