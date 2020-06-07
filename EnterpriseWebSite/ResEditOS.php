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

$OS = $_POST['OS'];
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

include('ConexaoBD.php');

$sqlupdate = "UPDATE orcamento SET OS = '$OS', DataE = '$DataE',DataC = '$DataC',DataS = '$DataS',Situacao = '$Situacao',Cliente = '$Cliente',Aparelho = '$Aparelho', Servico = '$Servico',Reclamacao = '$Reclamacao', Observacoes = '$Observacoes',Acessorios = '$Acessorios',Pagamento = '$Pagamento',Garantia = '$Garantia',Desconto = '$Desconto',Parcelas = '$Parcelas', ValorF = '$ValorF', Responsavel = '$Tecnico'  WHERE OS = '$OS'"; 

mysqli_query($link,$sqlupdate) or die("ERRO");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Dados editados</h2>
									<button onclick='goBack()'>Voltar</button>
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