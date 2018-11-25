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
	top: 93%;
	left: 21%;
	transform: translate(-50%,-50%);
	color: black;
}
</style>
</head>
<body>


<div class="image">
	<div class="text0">
		<h1 style="font-size:35px">Vitajte, <?php echo $_POST["name"]?>!</h1><br><br>
	</div>
			<div class="text1">
			<h2 style"font-size:24px">Vaše zadanie online pracovného <br>pohovoru si môžete stiahnuť <button><a href="znenie_zadania.php">TU</a></button></h2>
			Prosím, po vyplnení zadania ho odošlite na: <u>e-mail@gmail.com</u>
			</div>
				<div class="text2">
			<h3><i>Zadanie je k dispozícii od ...<br>
			Na vyplnenie zadania je časový limit ...<br></i><h3>
			<button><a href="prihlasenie-css_v2.php">Odhlásiť</a><button>
				</div>
</div>

</body>
</html>