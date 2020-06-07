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

$ID_Produto = $_GET['ID_Produto'];

$sql = "DELETE FROM produto WHERE ID_Produto = '$ID_Produto'";

mysqli_query($link,$sql) or die("ERRO");

echo "<div id='wrapper'>
					
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                    	<div class='inner'>
									<h2>Produto deletado</h2>
									<p><a href = Estoque.php>Voltar</p>
						    </form>
                        </div>
                    </section>
			</div>";
?>

</body>
</html>