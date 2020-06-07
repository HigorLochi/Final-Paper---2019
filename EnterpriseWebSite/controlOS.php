<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Detalhes do orçamentos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
					
                <!-- Four -->
                    <section id="four" class="wrapper style11 fade-up">
                    	<div class="inner">
                    		<h2>Registro</h2>
							<form method="post" action="cadDetOS.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>Orçamento referente:</label>
										<select name="OS" id="demo-category">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM orcamento ORDER BY OS ASC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['OS']."'>".$cont['OS']."</option>";
	}
?>
                                        </select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Valor total:</label>
										<input type="text" name="ValorT" id="demo-email" value=""/>
                                    </div>
									<div class="col-12 col-12-xsmall">
										<label>Serviço:</label>
										<select name="Servico" id="demo-category"></select>
                                    </div>
                                    </p>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Registrar" class="primary"/></li>
											<li><input type="reset" value="Limpar"/></li>
										</ul>
									</div>
								</div>
						    </form>
                        </div>
                    </section>
                    <section id="" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Detalhes</h2>
                            <p>Detalhes de cada orçamento</p>
							<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Orçamento referente</th>
													<th>Serviço</th>
													<th>Desconto</th>
													<th>Valor total</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT a.CPF, a.Nome, a.Senha, a.Email, a.Telefone, a.Endereco, a.CEP, a.Cidade, b.DescEstado FROM cliente a   
INNER JOIN estado b ON a.Estado = b.ID_Estado ORDER BY Nome ASC";

                                        	$resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['Orcamento']."</td>
                                                    <td>".$cont['Nome']."</td>
                                                    <td>".$cont['Senha']."</td>
                                                    <td>".$cont['Email']."</td>
                                                    <td>".$cont['Telefone']."</td>
                                                    <td>".$cont['Endereco']."</td>
                                                    <td>".$cont['CEP']."</td>
                                                    <td>".$cont['Cidade']."</td>
                                                    <td>".$cont['DescEstado']."</td>
                                                    <td>
                                                    <a href='editDetOS.php?CPF=".$cont['CPF']."'target='new_blank'>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delDelOS.php?CPF=".$cont['CPF']."'target=''>
                                                    Excluir
                                                    </a>
                                                    </td>
                                        		</tr>
                                        		";
                                        	}

                                        	?>
											</tbody>
										</table>
									</div>
                        </div>
                    </section>
			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>