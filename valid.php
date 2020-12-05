<?php
	// Container für künftige Fehlermeldungen
	$error = array();
	
	
	// Formular wurde versendet
	if (count($_POST) > 0){
		

		// Prüfen ob Feld 'lastname' leer ist
		if ($_POST['lastname'] === ''){
			$error['lastname'] = 'Bitte Nachnamen eingeben.';
		}
		
		// Prüfen ob Feld 'firstname' leer ist
		if ($_POST['firstname'] === ''){
			$error['firstname'] = 'Bitte Vornamen eingeben.';
		}
		
		// Prüfen ob Feld 'firstname' leer ist
		if ($_POST['mail'] === ''){
			$error['mail'] = 'Bitte E-Mail eingeben.';
		}
		
		// Prüfen ob Feld 'gender' leer ist
		if (!isset($_POST['gender'])){
			$error['gender'] = 'Bitte wählen Sie ein Geschlecht aus.';
		}
		
		// Prüfen ob Feld 'infos' leer ist
		if (!isset($_POST['infos'])){
			$error['infos'] = 'Bitte wählen Sie mind. 1 Info aus.';
		}
		
	}
?>
<!doctype html>

<html>


<head>

	<title>Validieren</title>
	<meta charset="utf-8">
	<meta name ="description" content="Beispiel eines HTML Grundgerüst">
	
	<meta name ="keyword" content="Formulare erstellen">
	<meta name ="author" content="Nirushaan Sureshkumar">
	
	<style>
	.error {color:red;}
	body {color: #23c872;}
	#262626;}
	
	body {backgroundcolor:black;}
	</style>
	
</head>


<body>
	<?php
	
	
	if (count($_POST) === 0 || count($error) > 0){

	?>

	
	
	<h1 style="color: #23C872;">Bestellung von Informationsmaterial</h1>
	
	<form action="valid.php"  method="POST">
		
		<p>
			<label>
				Name<br> 
				<input type="text" name="lastname" autofocus value="<?php if(isset($_POST['lastname'])){
						$name = strip_tags($_POST['lastname']);
						echo $name;
					}
				?>">
			</label>
			<span class="error"> *
			<?php
			if(isset($error['lastname'])){
				echo '<span style="color: red;"> ' . $error['lastname'] . '</span>';
			}
			?>
			</span>
			
		</p>
		
		
	
		
		<p>
			<label>
				Vorname<br> 
				<input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])){
						$vorname = $_POST['firstname'];
						echo $vorname;
						
					}
				?>">
			</label>
			<span class="error"> *</span>
			<?php
			if(isset($error['firstname'])){
				echo '<span style="color: red;"> ' . $error['firstname'] . '</span>';
			}
			?>
		</p>
		
		
		<p>
			<label>
				E-Mail Adresse<br> 
				<input type="email" placeholder="example@example.com" name="mail" value="
				<?php if(isset($_POST['mail'])){
						$mail = $_POST['mail'];
						echo $mail;
					}
				?>">
			</label>
			<span class="error"> *</span>
			<?php
			if(isset($error['mail'])){
				echo '<span style="color: red;"> ' . $error['mail'] . '</span>';
			}
			?>
		</p>
		
		
		
		<br>
		<br>
		
		<legend>Geschlecht
		<span class="error"> *</span>
		<?php
			if(isset($error['gender'])){
				echo '<span style="color: red;"> ' . $error['gender'] . '</span>';
			}
		?>
		
		</legend>
			<label>
				<input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && ($_POST['gender'] == 'male')) echo ' checked'; ?>>
				Mann
			</label>
				
			<label>
				<input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && ($_POST['gender'] == 'female')) echo ' checked'; ?>>
				Frau
			</label>
			
			<label>
				<input type="radio" name="gender" value="other" <?php if (isset($_POST['gender']) && ($_POST['gender'] == 'other')) echo ' checked'; ?>>
				Kausi
			</label>
			

				
		<br>
		<br>
		
		<fieldset>
			<legend>Zu welchen Themen hätten Sie gerne Infos?</legend>
				<label>
					<input type="checkbox" name="infos[]" value="php" <?php if (isset($_POST['infos']) && in_array('php',$_POST['infos'])) echo ' checked'; ?>>
					PHP<br>
				</label>
				
				<label>
					<input type="checkbox" name="infos[]" value="html"<?php if (isset($_POST['infos']) && in_array('html',$_POST['infos'])) echo ' checked'; ?>>
					HTML<br>
				</label>
				
				<label>
					<input type="checkbox" name="infos[]" value="css"<?php if (isset($_POST['infos']) && in_array('css',$_POST['infos'])) echo ' checked'; ?>>
					CSS<br>
				</label>
				<span class="error"> *</span>
				<?php
					if(isset($error['infos'])){
						echo '<span style="color: red;"> ' . $error['infos'] . '</span>';
					}
				?>
		</fieldset>
		
		
	
		
		<fieldset>
			<legend>Dürfen wir Ihnen unseren Newsletter senden?</legend>
				<label>
					<input type="radio" name="news" value="ja">
					Ja, gerne<br>
				</label>
				
				<label>
					<input type="radio" name="news" value="nein">
					Nein, danke<br>
				</label>
		</fieldset>
		
		<p>
			<input type="submit" name="senden" value="Jetzt bestellen">
			<input type="reset" value="Zurücksetzen">
		</p>
	
		<p>
			<span class="error">*</span> Sind Pflichtfelder
		</p>
		
	
	</form>
	
	<?php
	} else {
	?>		
	<h1>Bestellungsliste</h1>
	
	<fieldset>
		<p><b>Nachname: </b><?php echo strip_tags($_POST['lastname']);?></p>
		<p><b>Vorname: </b><?php echo strip_tags($_POST['firstname']);?></p>
		<p><b>E-Mail Adresse: </b><?php echo strip_tags($_POST['mail']);?></p>
		<p><b>Geschlecht: </b><?php echo strip_tags($_POST['gender']);?></p>
		<p><b>Infos: </b><?php if(isset($_POST ['infos'])){
							$infos = $_POST['infos'];
							foreach ($_POST['infos'] as $info){
								echo '<li>' . $info . '</li>';
							}
						}?></p>
		<p><b>News: </b><?php echo ($_POST['news']);?></p>
		
	</fieldset>
	
	
	<?php
	
		}
	
	?>
	

	
</body>


</html>