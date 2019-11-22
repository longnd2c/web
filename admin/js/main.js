$(document).ready(function(){

	$("#btnregister").on("click", function(){

		$.ajax({
			url : '../admin/classes/Credentials.php',
			method : "POST",
			data : $(".register-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$(".register-form").trigger("reset");
					$(".message").html('<span class="text-success">'+resp.message+'</span>');
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});

	$("#btnlogin").on("click", function(){

		$.ajax({
			url : '../admin/classes/Credentials.php',
			method : "POST",
			data : $(".login-form").serialize(),
			success : function(response){
				console.log(response);
				var resp = $.parseJSON(response);
				if (resp.status == 202) {
					$(".register-form").trigger("reset");
					//$(".message").html('<span class="text-success">'+resp.message+'</span>');
					window.location.href = window.origin+"/ASM2/admin/index.php";
				}else if(resp.status == 303){
					$(".message").html('<span class="text-danger">'+resp.message+'</span>');
				}
			}
		});

	});

});