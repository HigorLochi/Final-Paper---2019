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

$cpf = $_GET['CPF'];
$sql = mysqli_query($link,"SELECT * FROM cliente WHERE CPF = '$cpf'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando cliente</h2>
                            <p></p>
							<form method="POST" action="ResEditCliente.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>CPF/CNPJ:</label>
										<input type="text" name="CPF" id="demo-name" value="<?php echo $cont['CPF'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Nome:</label>
										<input type="text" name="Nome" id="demo-email" value="<?php echo $cont['Nome'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Senha de usuário:</label>
										<input type="text" name="Senha" id="demo-email" value="<?php echo $cont['Senha'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Email:</label>
										<input type="text" name="Email" id="demo-email" value="<?php echo $cont['Email'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Telefone:</label>
										<input type="text" name="Telefone" id="demo-email" value="<?php echo $cont['Telefone'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Celular:</label>
										<input type="text" name="Celular" id="demo-email" value="<?php echo $cont['Celular'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Endereço:</label>
										<input type="text" name="Endereco" id="demo-email" value="<?php echo $cont['Endereco'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>CEP:</label>
										<input type="text" name="CEP" id="demo-email" value="<?php echo $cont['CEP'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Numero:</label>
										<input type="text" name="Numero" id="demo-email" value="<?php echo $cont['Numero'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Bairro:</label>
										<input type="text" name="Bairro" id="demo-email" value="<?php echo $cont['Bairro'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Cidade:</label>
										<input type="text" name="Cidade" id="demo-email" value="<?php echo $cont['Cidade'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Estado:</label>
										<select name="Estado" id="demo-category">
										<?php 									
	$sql1 = "SELECT * FROM estado ORDER BY ID_Estado ASC";
	$resultado1 = mysqli_query($link,$sql1);
	while ($cont1 = mysqli_fetch_array($resultado1)) {
		echo "<option value='".$cont1['ID_Estado']."'>".$cont1['DescEstado']."</option>";
	}
}
?>
                                        </select>
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