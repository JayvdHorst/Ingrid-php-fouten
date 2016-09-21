<html>
<head>
    <title>Mediacollege - Opgave 1f </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="toets.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h3>Opgave 1f </h3>

    <form action="1f_process.php" method="post">
        <div class="form-group">
            <label>Naam: </label><br>
            <input type="text" name="name" >
        </div>
        <div class="form-group">
            <label>Aantal fouten:</label><br>
            <input type="text" name="errors">
        </div>
		<div class="form-group">
            <label>Norm: </label><br>
			<input type="radio" name="norm" value="1"> 1 norm<br>
			<input type="radio" name="norm" value="2"> 2 norm<br>
			<input type="radio" name="norm" value="3" checked="checked"> 3 norm<br>
			<input type="radio" name="norm" value="4"> 4 norm<br>
			<input type="radio" name="norm" value="5"> 5 norm
		</div>
        <input type="submit" value="Verwerk">
    </form>
</div>

</body>
</html>