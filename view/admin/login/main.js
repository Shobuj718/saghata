$(document).ready(function(){
	$("#username").keyup(function(){
		var name = $(this).val();

		$.ajax({
			url      : 'view/admin/login/checkuser.php',
			method   : 'POST',
			data     : {username:name},
			dataType : 'text',
			success:function(data){
				$('#userstatus').html(data);
			}
		});
	});
});



//Email availability check...
$(document).ready(function(){
	$("#email").keyup(function(){
		var email = $(this).val();
		
		$.ajax({
			url : 'view/admin/login/checkuser.php',
			method : 'POST',
			data   : {email:email},
			dataType : 'text',
			success:function(data){
				$("#emailstatus").html(data);
			}
		});
	});
});
