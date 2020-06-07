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

$ID_Compra = $_GET['ID_Compra'];
$sql = mysqli_query($link,"SELECT * FROM compra WHERE ID_Compra = '$ID_Compra'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando gasto</h2>
                            <p></p>
							<form method="post" action="ResEditGasto.php">
                                <div class="row gtr-uniform">
                                	<div class="col-12 col-12-xsmall">
                                        <label>ID:</label>
                                        <input type="text" name="ID" id="demo-email" readonly value="<?php echo $cont['ID_Compra'];?>"/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Data da compra:</label>
                                        <input type="date" name="DataC" id="demo-email" value="<?php echo $cont['DataC'];?>"/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Quantidade:</label>
                                        <input type="text" name="Quantidade" id="demo-email" value="<?php echo $cont['Quantidade'];?>"/>
                                    </div>
                                    <div class="col-12 col-12-xsmall">
                                        <label>Produto:</label>
                                        <input type="text" name="Produto" id="demo-email" list="alo" value="<?php echo $cont['Produto'];}?>" />
                                        <datalist name="Produto" id="alo" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM produto ORDER BY DescProduto ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['ID_Produto']."'>".$cont['DescProduto']."</option>";
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