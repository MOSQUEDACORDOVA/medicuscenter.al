<!DOCTYPE html>
<html>
<head>
	<title>Send SMS using Twilio</title>
</head>
<body>
	<p> Enter your message </p>
	<form action="index2.php?route=send.php" method="POST">
		<textarea name="message"></textarea>
		
		<input type="submit" name="submit" value="Send">
		
	</form>
	<?php
		if(isset($_GET['sent'])) {
			echo "Message Sent!";
		}
	?>
</body>
</html>