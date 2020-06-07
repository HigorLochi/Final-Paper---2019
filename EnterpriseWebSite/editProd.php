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

$ID_Produto = $_GET['ID_Produto'];
$sql = mysqli_query($link,"SELECT * FROM produto WHERE ID_Produto = '$ID_Produto'");
while ($cont = mysqli_fetch_array($sql)) {
?>
	<section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Editando produto</h2>
                            <p></p>
							<form method="post" action="ResEditProd.php">
                                <div class="row gtr-uniform">
                                	<div class="col-12 col-12-xsmall">
                                        <label>ID:</label>
                                        <input type="text" name="ID" id="demo-email" readonly value="<?php echo $cont['ID_Produto'];?>"/>
                                    </div>
                                    <div class="col-12 col-12-xsmall">
                                        <label>Produto:</label>
                                        <input type="text" name="Produto" id="demo-email" value="<?php echo $cont['DescProduto'];?>"/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>ValorUnit:</label>
                                        <input type="text" name="ValorUnit" id="demo-name" value="<?php echo $cont['ValorUnit'];?>"/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Garantia:</label>
                                        <input type="text" name="Garantia" id="demo-email" value="<?php echo $cont['Garantia'];?>"/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Quantidade:</label>
                                        <input type="text" name="Quantidade" id="demo-email" value="<?php echo $cont['Quantidade'];}?>"/>
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