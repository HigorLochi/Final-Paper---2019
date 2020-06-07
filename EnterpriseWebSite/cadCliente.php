
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hiatec</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<?php
$CPF = $_POST['CPF'];
$Nome = $_POST['Nome'];
$Senha = $_POST['Senha'];
$Email = $_POST['Email'];
$Telefone = $_POST['Telefone'];
$Celular = $_POST['Celular'];
$Endereco = $_POST['Endereco'];
$CEP = $_POST['CEP'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$Cidade = $_POST['Cidade'];
$Estado = $_POST['Estado'];

require ('conexaoBD.php');

$sqlinsert = "INSERT INTO cliente(CPF,Nome,Senha,Email,Telefone,Celular,Endereco,CEP,Numero,Bairro,Cidade,Estado)
VALUES('$CPF','$Nome','$Senha','$Email','$Telefone','$Celular','$Endereco','$CEP','$Numero','$Bairro','$Cidade','$Estado')";

mysqli_query($link,$sqlinsert)or die("");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Você foi cadastrado com sucesso!</h2></br>
									<a href = index.php>Voltar para o site</a></br>
									<a href = login.php>Fazer login</a>
						    </form>
                        </div>
                    </section>
			</div>";
?>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

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