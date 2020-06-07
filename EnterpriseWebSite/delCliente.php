<!DOCTYPE html>
<html>
<head>
	<title>Deletar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>

	<?php
include('ConexaoBD.php');

$cpf = $_GET['CPF'];

$sql = "DELETE FROM cliente WHERE CPF = '$cpf'";

mysqli_query($link,$sql) or die("<div id='wrapper'>
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Não foi possivel deletar, o cliente está em um orçamento.</h2></br>
									<button onclick='goBack()'>Voltar</button>
									<script>
function goBack() {
  window.history.go(-1);
}
</script>	
						    </form>
                        </div>
                    </section>
			</div>");

$resultado = "Cliente deletado com sucesso.";

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Cliente deletado com sucesso!</h2></br>
									<a href = indexEX.php>Voltar</a>
						    </form>
                        </div>
                    </section>
			</div>";
?>

</body>
</html>