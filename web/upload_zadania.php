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
	background: url(test.jpg) no-repeat center;
	background-size: cover;
	height: 600px;
	position: relative;
}

.text0 {
	text-align: left;
	position: absolute;
	top: 18%;
	left: 25%;
	transform: translate(-50%,-50%);
	color: black;
}

.text1 {
	text-align: left;
	position: absolute;
	top: 50%;
	left: 25%;
	transform: translate(-50%,-50%);
	color: darkblue;
}

.text2 {
	text-align: left;
	position: absolute;
	top: 87%;
	left: 32%;
	transform: translate(-50%,-50%);
	color: black;
}
</style>
</head>
<body>


<div class="image">
	<div class="text0">
		<h1 style="font-size:35px">Vitajte!
		</div>
			<div class="text1">
			<h2 style"font-size:24px">Zadanie online pracovného <br>pohovoru nahrajte <button><a href="upload.php">TU</a></button></h2>
			</div>
				<div class="text2">
				<h4>Pre pridanie nového uchádzača vyplňte, prosím, nasledujúce údaje:</h4>
			<form action="zadanie.php" method="post">
			<br><b>Meno:<input type="text" name="name"><br>
			Priezvisko:<input type="text" name="surename"><br>
			E-mail: </b><input type="text" name="email"><br><br>
			<input type="submit"><br><br>
			<button><a href="prihlasenie-css_v2.php">Odhlásiť</a><button>
				</div>
</div>

</body>
</html>