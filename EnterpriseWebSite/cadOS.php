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
$DataE = $_POST['DataE'];
$DataC = $_POST['DataC'];
$DataS = $_POST['DataS'];
$Situacao = $_POST['Situacao'];
$Cliente = $_POST['Cliente'];
$Aparelho = $_POST['Aparelho'];
$Servico = $_POST['Servico'];
$Reclamacao = $_POST['Reclamacao'];
$Observacoes = $_POST['Observacoes'];
$Acessorios = $_POST['Acessorios'];
$Pagamento = $_POST['Pagamento'];
$Garantia = $_POST['Garantia'];
$Desconto = $_POST['Desconto'];
$Parcelas = $_POST['Parcelas'];
$ValorF = $_POST['ValorF'];
$Tecnico = $_POST['Tecnico'];

require ('ConexaoBD.php');

$sqlinsert = "INSERT INTO orcamento(DataE,DataC,DataS,Situacao,Cliente,Aparelho,Servico,Reclamacao,Observacoes,Acessorios,Pagamento,Garantia,Desconto,Parcelas,ValorF,Responsavel)
VALUES('$DataE','$DataC','$DataS','$Situacao','$Cliente','$Aparelho','$Servico','$Reclamacao','$Observacoes','$Acessorios','$Pagamento','$Garantia','$Desconto','$Parcelas','$ValorF','$Tecnico')";

mysqli_query($link,$sqlinsert)or die("erro");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Ordem de serviço registrada.</h2></br>
									<a href = indexEX.php>Voltar</a>

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