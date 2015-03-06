$(document).ready(function(){
	$("#btn-login").click(function () {
		$("#div-choices").hide();
    	$("#div-login-form").css({"visibility":"initial",
    							  "display":"initial"
    							});
    });

	$("#btn-logout").click(function () {
		$("#div-logout").hide();
    	$("#div-logout-confirm").css({"visibility":"initial",
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
	$("#btn-back-login").click(function(){
		$("#div-login-form").hide();
		$("#div-register-form").hide();
		$("#div-choices").show();
	});

	$("#btn-back-logout").click(function(){
		$("#div-logout-confirm").hide();
		$("#div-logout").show();
	});		

	$("#btn-back-register").click(function(){
		$("#div-login-form").hide();
		$("#div-register-form").hide();
		$("#div-choices").show();
	});		
});
	