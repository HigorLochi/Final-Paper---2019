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

$id = $_GET['ID_Aparelho'];
$sql = mysqli_query($link,"SELECT * FROM aparelho WHERE ID_Aparelho = '$id'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando máquina</h2>
                            <p></p>
							<form method="POST" action="ResEditAparelho.php">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<label>ID (Mudanças feita apenas pelo administrador):</label>
										<input type="text" name="ID" id="demo-email" readonly value="<?php echo $cont['ID_Aparelho'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Tipo:</label>
										<select name="Tipo" id="demo-category" >
<?php
	$sql1 = "SELECT * FROM tipo ORDER BY DescTipo ASC";
	$resultado1 = mysqli_query($link,$sql1);
	while ($cont1 = mysqli_fetch_array($resultado1)) {
		echo "<option value='".$cont1['ID_Tipo']."'>".$cont1['DescTipo']."</option>";
	}
?>
											</select>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Modelo:</label>
										<input type="text" name="Modelo" id="demo-email" value="<?php echo $cont['Modelo'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Marca:</label>
										<select name="Marca" id="demo-category" >
<?php
	$sql1 = "SELECT * FROM marca ORDER BY DescMarca ASC";
	$resultado1 = mysqli_query($link,$sql1);
	while ($cont1 = mysqli_fetch_array($resultado1)) {
		echo "<option value='".$cont1['ID_Marca']."'>".$cont1['DescMarca']."</option>";
	}
?>
											</select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Cor:</label>
										<input type="text" name="Cor" id="demo-email" value="<?php echo $cont['Cor'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>SO:</label>
										<select name="SO" id="demo-category" >
<?php
	$sql1 = "SELECT * FROM so ORDER BY DescSO ASC";
	$resultado1 = mysqli_query($link,$sql1);
	while ($cont1 = mysqli_fetch_array($resultado1)) {
		echo "<option value='".$cont1['ID_SO']."'>".$cont1['DescSO']."</option>";
	}
?>
											</select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Processador:</label>
										<input type="text" name="Processador" id="demo-email" value="<?php echo $cont['Processador'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Placa de video:</label>
										<input type="text" name="Placa_video" id="demo-email" value="<?php echo $cont['Placa_video'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Memória RAM:</label>
										<select name="MemoriaRAM" id="demo-category" >
<?php
	$sql1 = "SELECT * FROM ram ORDER BY DescRam ASC";
	$resultado1 = mysqli_query($link,$sql1);
	while ($cont1 = mysqli_fetch_array($resultado1)) {
		echo "<option value='".$cont1['ID_Ram']."'>".$cont1['DescRam']."</option>";
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