<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, intital-scale=1">
<style>
body {
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.image {
	background: url(job.png) no-repeat center;
	background-size: cover;
	height: 600px;
	position: relative;
}

.logo {
    height:100px;
    width:100px;
    background:url(logo.png);
    background-repeat: no-repeat;
    background-size: contain;
	position: absolute;
	left: 67%;
	top: 10%;
}

.text {
	text-align: center;
	position: absolute;
	top: 50%;
	left: 70%;
	transform: translate(-50%, -50%);
	color: black;
}
</style>
</head>
<body>

<div class="image">
	<div class="logo">
	</div>
		<div class="text">
			<h1 style="font-size:50px">Online pracovný pohovor</h1>
			<h3> <form action="zadanie.php" method="post">
			<br>Meno:    <input type="text" name="name"><br>
			Priezvisko: <input type="text" name="surname"><br>
			E-mail:    </b><input type="text" name="email"><br><br>
			<input type="submit">
				</form></h3>
	</div>
</div>

</body>
</html>
