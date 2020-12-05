<!doctype html>
<html="de">


<head>

	<title>Testergebnis</title>
	<meta charset="utf-8">
	<meta name ="description" content="Beispiel eines HTML Grundgerüst">
	
	<meta name ="keyword" content="Formulare erstellen">
	<meta name ="author" content="Nirushaan Sureshkumar">
	
</head>


<body>

	<?php
	
	
	// $_GET
	echo '<h2>$_GET</h2>';
	echo '<pre>';
	print_r($_GET);
	echo '</pre>';

	?>
	
	<h1>Testergebnis</h1>
	
	<form action="testergebnis.php" methode="GET">
		
		<label>
			Telefonnummer:<br>
			<input type="tel" name="telefonnummer" autofocus>
		</label>
		
		<br>
		<br>
		
		<label>
			URL:<br>
			<input type="url" name="url">
		</label>
		
		<br>
		<br>
		
		<label>
			Email:<br>
			<input type="email" name="email">
		</label>
		
		<br>
		<br>
		
		<label>
			Datum:<br>
			<input type="date" name="datum">
		</label>
		
		<br>
		<br>
		
		<label>
			Zeit:<br>
			<input type="time" name="zeit">
		</label>
		
		<br>
		<br>
		
		<label>
			Nummer:<br>
			<input type="number" name="nummer">
		</label>
		
		<br>
		<br>
		
		<label>
			Range:<br>
			<input type="range" name="range">
		</label>
		
		<br>
		<br>
		
		<label>
			Farbe:<br>
			<input type="color" name="farbe">
		</label>
		
		<br>
		<br>
		
		<label>
			Suche:<br>
			<input type="search" name="suche">
		</label>
		
		<br>
		<br>
		
		<fieldset>
			<legend>Datei-Format</legend>
				<label>
					<input type="radio" name="format" value="pdf">
					PDF<br>
				</label>
				
				<label>
					<input type="radio" name="format" value="epub">
					ePUB<br>
				</label>
		</fieldset>
		
		<br>
		<br>
		
		<fieldset>
			<legend>Lehrmittel</legend>
				<label>
					<input type="checkbox" name="lehrmittel[]" value="html5">
					HTML5 Handbuch<br>
				</label>
				
				<label>
					<input type="checkbox" name="lehrmittel[]" value="einstieg">
					Einstieg in PHP 5.5 und MySQL 5.6<br>
				</label>
				
				<label>
					<input type="checkbox" name="lehrmittel[]" value="javascript">
					JavaScript, Das umfassende Referenzwerk<br>
				</label>
		</fieldset>
		
		<br>
		<br>
		
		Kreditkarte:<br>
		<select name="kreditkarte">
			<option value="Visa">Visa
			<option value="Mastercard">Mastercard
			<option value="DinersClub">Diners Club
		</select>
		
		<p>
			<input type="submit" name="senden" value="Senden">
		</p>
		
		
		
	</form>
	
	
	
</body>


</html>