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

$sqlupdate = "UPDATE cliente SET CPF = '$CPF', Nome = '$Nome',Senha = '$Senha',Email = '$Email',Telefone = '$Telefone',Celular = '$Celular',Endereco = '$Endereco',CEP = '$CEP',Numero = '$Numero',Bairro = '$Bairro', Cidade = '$Cidade', Estado = '$Estado' WHERE CPF = '$CPF'"; 

mysqli_query($link,$sqlupdate) or die("ERRO");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Dados editados</h2></br>
									<button onclick='goBack()''>Voltar</button>
									<script>
function goBack() {
  window.history.go(-2);
}
</script>											
						    </form>
                        </div>
                    </section>
			</div>";

?>

</body>
</html>