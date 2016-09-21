<html>
	<head>
		<title>Mediacollege - Opgave 1f</title>
	</head>
	<body>
		<h3>Opgave 1f</h3>

		<?php 
		
		$fouten =  $_POST['errors'];
		$naam = $_POST['name'];
		$normen = $_POST['norm'];
		$naam = ucfirst($naam);

		$norm1 = 10 - $fouten;
		$norm2 = 10 - $fouten /  2;
		$norm3 = 10 - $fouten /  3;
		$norm4 = 10 - $fouten /  4;
		$norm5 = 10 - $fouten /  5;

		if ($norm1 < 1){
			$norm = 1;
		}
		if ($norm2 < 1){
			$norm = 1;
		}
		if ($norm3 < 1){
			$norm = 1;
		}
		if ($norm4 < 1){
			$norm = 1;
		}
		if ($norm5 < 1){
			$norm = 1;
		}
		if (!preg_match('/^[0-99]*$/', $fouten)) {
			echo "invalid number";
		} else {
		
			if (empty($_POST["name"])) {
				echo "Je hebt je naam niet ingevuld";
			} else if (empty($_POST["errors"])) {
				echo "Je hebt geen aantal fouten ingevuld";
			} else {
				echo "Leerling ", $_POST["name"], " heeft " , $_POST["errors"], " fouten gemaakt. <br><br>";
				if ($normen == '1') {
					echo "Bij een norm van 1 is het behaalde cijfer: " . " " . $norm1;
				}
				if ($normen == '2') {
					echo "Bij een norm van 2 is het behaalde cijfer: " . " " . $norm2;
				}
				if ($normen == '3') {
					echo "Bij een norm van 3 is het behaalde cijfer: " . " " . $norm3;
				}
				if ($normen == '4') {
					echo "Bij een norm van 4 is het behaalde cijfer: " . " " . $norm4;
				}
				if ($normen == '5') {
					echo "Bij een norm van 5 is het behaalde cijfer: " . " " . $norm5;
				}
			}

		}
		?>
		<br>
		<a href="opd1.php"> Terug naar formulier</a>

	</body>
</html>
