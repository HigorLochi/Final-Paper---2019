<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
						<?php
$Produto = $_POST['Produto'];
$DataC = $_POST['DataC'];
$Qtd = $_POST['Qtd'];


require ('ConexaoBD.php');

$sqlinsert = "INSERT INTO compra(Produto,DataC,Quantidade) 
VALUES('$Produto','$DataC','$Qtd')";

mysqli_query($link,$sqlinsert)or die("erro");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Gasto registrado.</h2></br>
									<button onclick='goBack()''>Voltar</button>
									<script>
function goBack() {
  window.history.go(-1);
}
</script>			
						    </form>
                        </div>
                    </section>
			</div>";
?>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>