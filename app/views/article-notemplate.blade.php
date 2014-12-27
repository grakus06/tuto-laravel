<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<title>Les articles</title>
<body>
	<!--- html only 
	<p>C'est l'article n° <?php echo $numero ?></p>
	-->
	<!-- with blade preprocessor -->
	<!-- need to rename filename with .blade.php extension -->
	<p>C'est l'excellent article n° {{{ $numero }}}</p>
</body>
</html>
