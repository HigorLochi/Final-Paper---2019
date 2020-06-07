<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>

	<?php

$Cpft = $_POST['CPFT'];
$NomeT = $_POST['NomeT'];
$Email = $_POST['Email'];
$Idade = $_POST['Idade'];
$Telefone = $_POST['Telefone'];

require ('conexaoBD.php');

$sqlupdate = "UPDATE tecnico SET CPFT = '$Cpft', NomeT = '$NomeT',Idade = '$Idade',Email = '$Email',Telefone = '$Telefone' WHERE CPFT = '$Cpft'"; 

mysqli_query($link,$sqlupdate) or die("ERRO");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Dados editados</h2>
									<a href = indexEX.php>Voltar</a>
						    </form>
                        </div>
                    </section>
			</div>";

?>

</body>
</html>