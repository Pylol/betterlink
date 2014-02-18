$(document).ready(function(){
	$('.loginform_submit').click(function(){
		var user=$('#user').val();
		var password=$('#password').val();
		var verify=$('#verify').val();
/*		alert(user);
		alert(password);
		alert(verify);*/
		var value={user:$('#user').val(),password:$('#password').val(),verify:$('#verify').val()};
	});
});
$(document).ready(function(){
	$('#login').click(function(){
		$('form[name="loginForm"]').submit();
	})
});