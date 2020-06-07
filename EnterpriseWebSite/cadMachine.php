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
$Tipo = $_POST['Tipo'];
$Cliente = $_POST['Cliente'];
$Modelo = $_POST['Modelo'];
$Marca = $_POST['Marca'];
$Cor = $_POST['Cor'];
$SO = $_POST['SO'];
$Processador = $_POST['Processador'];
$Placa = $_POST['Placa'];
$RAM = $_POST['RAM'];

require ('conexaoBD.php');

$sqlinsert = "INSERT INTO aparelho(Cliente_Aparelho,Tipo,Modelo,Marca,Cor,SO,Processador,Placa_video,RAM)
VALUES('$Cliente','$Tipo','$Modelo','$Marca','$Cor','$SO','$Processador','$Placa','$RAM')";

mysqli_query($link,$sqlinsert)or die("erro");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Maquina registrada com sucesso!</h2></br>
									<a href = indexCliente.php>Voltar para o site.</a>
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