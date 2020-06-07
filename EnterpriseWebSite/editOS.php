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

$os = $_GET['OS'];
$sql = mysqli_query($link,"SELECT * FROM orcamento WHERE OS = '$os'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando OS</h2>
                            <p></p>
							<form method="POST" action="ResEditOS.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>OS:</label>
										<input type="text" name="OS" id="demo-name" readonly value="<?php echo $cont['OS'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Data de entrada:</label>
										<input type="date" name="DataE" id="demo-name" value="<?php echo $cont['DataE'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Data da conclusão:</label>
										<input type="date" name="DataC" id="demo-email" value="<?php echo $cont['DataC'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Data da saida:</label>
										<input type="date" name="DataS" id="demo-email" value="<?php echo $cont['DataS'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Situação:</label>
										<input type="text" name="Situacao" id="demo-email" list="alo" value="<?php echo $cont['Situacao'];?>" />
										<datalist name="Situacao" id="alo" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM situacao  ORDER BY DescSituacao ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['ID_Situacao']."'>".$cont['DescSituacao']."</option>";
    }
?>
                                            </datalist>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Cliente:</label>
										<input type="text" name="Cliente" id="nome" list="Cl" value="<?php echo $cont['Cliente'];?>"/>
										<datalist name="Cliente" id="Cl" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Nome ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['CPF']."'>".$cont['Nome']."</option>";
    }
?>
                                            </datalist>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Aparelho:</label>
										<input type="text" name="Aparelho" list="Ap" value="<?php echo $cont['Aparelho'];?>">
										<datalist name="Aparelho" id="Ap">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM aparelho a ORDER BY Modelo ASC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Aparelho']."'>".$cont['Cliente_Aparelho']."</option>";
	}
?>
                                        </datalist>
									</div>
									<div class="col-6 col-12-xsmall">
                                        <label>Serviço realizado:</label>
                                        <input type="text" name="Servico" id="demo-category" value="<?php echo $cont['Servico'];?>">
                                    </div>
									<div class="col-6 col-12-xsmall">
										<label>Reclamação:</label>
										<input type="text" name="Reclamacao" id="demo-email" value="<?php echo $cont['Reclamacao'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Observações:</label>
										<input type="text" name="Observacoes" id="demo-email" value="<?php echo $cont['Observacoes'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Acessórios:</label>
										<input type="text" name="Acessorios" id="demo-email" value="<?php echo $cont['Acessorios'];?>"/>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Pagamento:</label>
										<input type="text" name="Pagamento" list="Pa" value="<?php echo $cont['Pagamento'];?>">
										<datalist name="Pagamento" id="Pa">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM pagamento ORDER BY DescPagamento ASC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Pagamento']."'>".$cont['DescPagamento']."</option>";
	}
?>
                                        </datalist>
									</div>
									<div class="col-12 col-12-xsmall">
										<label>Garantia:</label>
										<input type="text" name="Garantia" id="demo-email" value="<?php echo $cont['Garantia'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Desconto:</label>
										<input type="text" name="Desconto" list="Des" value="<?php echo $cont['Desconto'];?>">
										<datalist name="Desconto" id="Des">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM desconto ORDER BY DescDesconto ASC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Desconto']."'>".$cont['DescDesconto']."</option>";
	}
?>
                                        </datalist>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Parcelas:</label>
										<input type="text" name="Parcelas" id="demo-email" value="<?php echo $cont['Parcelas'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Valor final:</label>
										<input type="text" name="ValorF" id="demo-email" value="<?php echo $cont['ValorF'];?>"/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Responsável:</label>
										<input type="text" name="Tecnico" list="Tec" value="<?php echo $cont['Responsavel'];?>">
										<datalist name="Tecnico" id="Tec">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM tecnico ORDER BY NomeT ASC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['CPFT']."'>".$cont['NomeT']."</option>";
	}
}
?>
                                        </datalist>
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