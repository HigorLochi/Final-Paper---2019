<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>

<?php
	require('ConexaoBD.php');

$cpft = $_GET['CPFT'];
$sql = mysqli_query($link,"SELECT * FROM tecnico WHERE CPFT = '$cpft'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando técnico</h2>
                            <p></p>
							<form method="POST" action="ResEditTecnico.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>CPF/CNPJ:</label>
										<input type="text" name="CPFT" id="demo-name" value="<?php echo $cont['CPFT'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Nome:</label>
										<input type="text" name="NomeT" id="demo-email" value="<?php echo $cont['NomeT'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Idade:</label>
										<input type="text" name="Idade" id="demo-email" value="<?php echo $cont['Idade'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Telefone:</label>
										<input type="text" name="Telefone" id="demo-email" value="<?php echo $cont['Telefone'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Email:</label>
										<input type="text" name="Email" id="demo-email" value="<?php echo $cont['Email'];}?>"/>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Editar" class="primary"/></li>
											<li><input type="reset" value="Limpar"/></li>
										</ul>
									</div>
								</div>
	       			    </form>
                    </div>
                </section>
            </body>
        </html>