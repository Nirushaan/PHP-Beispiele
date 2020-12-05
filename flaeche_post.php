<!doctype html>
<html="de">


<head>

	<title>Fläche berechnen</title>
	<meta charset="utf-8">
	<meta name ="description" content="Beispiel eines HTML Grundgerüst">
	
	<meta name ="keyword" content="Formulare erstellen">
	<meta name ="author" content="Nirushaan Sureshkumar">
	
</head>


<body>

	<?php
	// $_GET
	echo '<h2>$_POST</h2>';
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	
	
	if(isset($_POST['senden'])) {
		$laenge = $_POST['laenge'];
		$breite = $_POST['breite'];
		
		// Fläche berechnen
		$flaeche = $breite * $laenge;
		
		
		echo '<p>Länge: ' . $laenge;
		echo '<p>Breite: ' . $breite;
		echo '<p>Fläche: ' . $flaeche;
		
	}
	
	
	?>
	
	<h1>Fläche berechnen</h1>
	
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
		<p>
			<label>
				Länge:
				<input type="text" name="laenge" autofocus>
			</label>
		</p>
		<p>
			<label>
				Breite:
				<input type="text" name="breite">
			</label>
		</p>
		<p>
			<input type="submit" name="senden" value="Berechnen">
			<input type="reset" value="Zurücksetzen">
		</p>
	
	</form>
	
	
	
</body>


</html>