 <?php
	
	include_once ("head.php");
	include_once ("r_form.php");
	echo "Registrierung";
	include_once ("footer.php");
	
?>

<script> 
$ (document).ready(function(){
	
	$("#regist").click(function( event ){
		var pass = $("#password").val();
		var pass2 = $("#password2").val();
		
	if (pass !== pass2)
	{
		event.preventDefault();
		$(".match").text("Passwörter stimmen nicht überein");
	}

	});	
	

		
});





</script>

