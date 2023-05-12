<!DOCTYPE html>
<html>
<head>
	<title>User Information Form</title>
</head>
<body>
	<form method="POST" action="">
		<label for="firstname">Voornaam:</label>
		<input type="text" id="firstname" name="firstname"><br>
		<label for="lastname">Achternaam:</label>
		<input type="text" id="lastname" name="lastname"><br>
		<label for="age">Leeftijd:</label>
		<input type="number" id="age" name="age"><br>
		<label for="address">Adres:</label>
		<input type="text" id="address" name="address"><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>
		<input type="submit" value="Verzenden">
	</form>

    <p>De GET-methode verzendt de gegevens 
    via de URL van de pagina, 
    terwijl de POST-methode de gegevens 
    in een aparte HTTP-header verstuurt.</p>
</body>
</html>