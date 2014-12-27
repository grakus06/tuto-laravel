<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			Pour réinitialiser votre mot de passe {{ link_to('password/reset/' . $token, 'cliquez sur ce lien') }}.
			To reset your password, complete this form: {{ URL::to('password/reset', array($token)) }}.<br/>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
		</div>
	</body>
</html>
