<?php
	/** Halaman Login Administrator **/
?>
<html>
<head>
<title>OS Administrator</title>
<script src="../os-media/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	var $form_inputs = $('form input');
	var $rainbow_and_border = $('.rain, .border');
	$form_inputs.bind('focus', function(){
		$rainbow_and_border.addClass('end').removeClass('unfocus start');
	});
	$form_inputs.bind('blur', function(){
		$rainbow_and_border.addClass('unfocus start').removeClass('end')
	});
	$form_inputs.first().delay(800).queue(function(){
		$(this).focus();
	});
});
</script>
<link rel="stylesheet" type="text/css" href="../os-media/css/login.css">
</head>
<body>
	<div class="rain">
		<div class="border start">
			<form method="POST" action="login.php">
				<label for="username">Username</label>
				<input name="username" type="text" placeholder="Masukkan Username" />
				<label for="password">Password</label>
				<input name="password" type="password" placeholder="Masukkan Password" />
				<input type="submit" id="submit" value="Masuk"/>
			</form>
		</div>
	</div>
</body>
</html>
