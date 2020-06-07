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
$ID_Aparelho = $_POST['ID'];
$Tipo = $_POST['Tipo'];
$Modelo = $_POST['Modelo'];
$Marca = $_POST['Marca'];
$Cor = $_POST['Cor'];
$SO = $_POST['SO'];
$Processador = $_POST['Processador'];
$Placa_video = $_POST['Placa_video'];
$MemoriaRAM = $_POST['MemoriaRAM'];

require ('ConexaoBD.php');

$sqlupdate = "UPDATE aparelho SET Tipo = '$Tipo', Modelo = '$Modelo',Marca = '$Marca',Cor = '$Cor',SO = '$SO',Processador = '$Processador',Placa_video = '$Placa_video', RAM = '$MemoriaRAM' WHERE ID_Aparelho = '$ID_Aparelho'"; 

mysqli_query($link,$sqlupdate) or die("ERRO");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Dados editados</h2>
									<button onclick='goBack()''>Voltar</button>
									<script>
function goBack() {
  window.history.go(-2);
}
</script>								
                        </div>
                    </section>
			</div>";

?>

</body>
</html>