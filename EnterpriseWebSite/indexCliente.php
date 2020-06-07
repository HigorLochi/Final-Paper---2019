<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }

$logado = $_SESSION['usuario'];  
?>
<html lang="br">
	<head>
		<title>HIATEC MANAGER</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	</head>
	<body class="is-preload">
		<script type="text/javascript">window.alert("Não se esqueça de clicar em sair na barra lateral após terminar, <?php echo $logado?>");</script>
		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Bem-vindo <?php echo "$logado"?></a></li>
							<li><a href="#one">Inicio</a></li>
							<li><a href="#two">Serviços</a></li>
							<li><a href="#five">Laboratório</a></li>
							<li><a href="#four">Registrar máquina</a></li>
							<li><a href="#six">Suas máquinas</a></li>
							<li><a href="#three">Entre em contato</a></li>
							<li><a href="logOut.php">Sair</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Hiatec</h1>
							<p>Empresa responsável por fazer a manutenção e formatação de Notebooks e Computadores, além de vender equipamentos como cabos USBs, fones de ouvido, PenDrives , entre outros.</p>
							<ul class="actions">
								<li><a href="info.html" target="new_blank" class="button scrolly">Saiba mais</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/desktop.png" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>SERVIÇO ESPECIALIZADO NA MANUTENÇÃO DE NOTEBOOKS</h2>
									<p>A Hiatec possui laboratório especializado  em manutenção de placas-mãe, de microcomputadores e notebooks.</br>Serviço garantido na substituição de chipset BGA.</p>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/notebookEX.png" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>MONTAGEM E MANUTENÇÃO DE MICROCOMPUTADORES</h2>
									<p>Formatação e instalação de Sistema Operacional e aplicativos. Configuração para um melhor desempenho do seu PC.</br>Remoção de vírus, recuperação de dados e backup. </p>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/HD.png" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>RECUPERAÇÃO DE DADOS</h2>
									<p>A recuperação de dados é um serviço feito pela Hiatec em que os dados e arquivos, presentes em HDs  danificados, podem ser recuperados.
									</p>
								</div>
							</div>
							<hr>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Serviços</h2>
							<p>A Hiatec possui laboratório próprio, especializado em reparos de placas-mãe de notebooks e desktops. Com ferramental adequado e técnicos treinados na ressolda e substituição de Chipset BGA, oferecendo assim serviços com 3 meses de garantia</p>
							<div class="features">
								<section>
									<span class="icon major fa-circle"></span>
									<h3>Reparo e Substituição de Jack DC</h3>
									<p><a href="#" class="image"><img src="images/Service6.jpg" alt="" data-position="center center"/></a></p>
								</section>
								<section>
									<span class="icon major fas fa-asterisk"></span>
									<h3>Revisão/Reparo/Substituição de Cooler</h3>
									<p><a href="#" class="image"><img src="images/Service5.jpg" alt="" data-position="center center"/></a></p>
								</section>
								<section>
									<span class="icon major fa-laptop"></span>
									<h3>Reparo/Substitição de Dobradiças</h3>
									<p><a href="#" class="image"><img src="images/Service4.jpg" alt="" data-position="center center"/></a></p>
								</section>
								<section>
									<span class="icon major fa-hdd"></span>
									<h3>Recuperação de dados e backup</h3>
									<p><a href="#" class="image"><img src="images/Service3.jpg" alt="" data-position="center center"/></a></p>
								</section>
								<section>
									<span class="icon major fa-keyboard"></span>
									<h3>Montagem e manutenção de PCs</h3>
									<p><a href="#" class="image"><img src="images/Service2.jpg" alt="" data-position="center center"/></a></p>
								</section>
								<section>
									<span class="icon major fa-tv"></span>
									<h3>Substituição de LCDs, LED e CCFL</h3>
									<p><a href="#" class="image"><img src="images/Service1.jpg" alt="" data-position="center center"/></a></p>
								</section>
							</div>
						</div>
					</section>
					<!-- Five -->
					<section id="five" class="wrapper style5 fade-up">
						<div class="inner">
							<h2>Laboratório</h2>
							<p>Algumas imagens do nosso laboratório.</p>
							<div class="table-wrapper">
							<table>
						    <tbody>
							<td><img src="images/lab1.jpg"></td>
							<td><img src="images/lab2.jpg"></td>
							<td><img src="images/lab3.jpg"></td>
							<td><img src="images/lab4.jpg"></td>
							</tbody>
							</table>
						    </div>
						</div>
					</section>
                <!-- Four -->
                    <section id="four" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Cadastro</h2>
                            <p>Registre seu aparelho nesta sessão para os admnistradores terem acesso as informações, campos opcionais não precisam ser preenchidos.</br>Em caso de dúvidas visite a Hiatec ou mande um email na sessão <a href="#three">ENTRE EM CONTATO</a>.</p>
							<form method="POST" action="cadMachine.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>Nome do proprietário(não pode ser alterado):</label>
										<input type="text" name="Cliente" value = "<?php echo "$logado"?>" id="demo-email" readonly/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Tipo:</label>
										<div class="col-12">
											<select name="Tipo" id="demo-category" required>
<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM tipo ORDER BY DescTipo DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Tipo']."'>".$cont['DescTipo']."</option>";
	}
?>
											</select>
										</div>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Modelo (opcional):</label>
										<input type="text" name="Modelo" id="demo-email" />
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Marca:</label>
										<select name="Marca" id="demo-category"  required>
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM marca ORDER BY ID_Marca DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Marca']."'>".$cont['DescMarca']."</option>";
	}
?>
                                        </select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Cor (opcional):</label>
										<input type="text" name="Cor" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Sistema operacional:</label>
										<select name="SO" id="demo-category"  required>
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM so ORDER BY ID_SO DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_SO']."'>".$cont['DescSO']."</option>";
	}
?>
                                        </select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Processador (opcional):</label>
										<input type="text" name="Processador" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Placa de video (opcional):</label>
										<input type="text" name="Placa" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Memória RAM (opcional):</label>
										<select name="RAM" id="demo-category">
<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM ram ORDER BY DescRam DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Ram']."'>".$cont['DescRam']."</option>";
	}
?>
											</select>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Registrar" class="primary"/></li>
											<li><input type="reset" value="Limpar"/></li>
										</ul>
									</div>
								</div>
						    </form>
                        </div>
                        <section id="six" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Registro</h2>
                            <p>Suas máquinas registradas.</p>
							<div class="table-wrapper">
										<table class="alt">
										    <thead>
												<tr>
													<th>ID</th>
													<th>Proprietário</th>
													<th>Tipo</th>
													<th>Modelo</th>
													<th>Marca</th>
													<th>Cor</th>
													<th>Sistema Operacional</th>
													<th>Processador</th>
													<th>Placa de vídeo</th>
													<th>Memória RAM</th>
												</tr>
											</thead>
											<tbody>
												
													<?php
                                        	require('ConexaoBD.php');
                                 
                                        	$sql = "SELECT a.ID_Aparelho,a.Cliente_Aparelho, b.DescTipo, a.Modelo, c.DescMarca, a.Cor, d.DescSO, a.Processador, a.Placa_video, e.DescRam FROM aparelho a   
INNER JOIN tipo b ON a.Tipo = b.ID_Tipo
INNER JOIN marca c ON a.Marca = c.ID_Marca
INNER JOIN so d ON a.SO = d.ID_SO
INNER JOIN ram e ON a.RAM = e.ID_Ram WHERE Cliente_Aparelho = '$logado' ORDER BY ID_Aparelho ASC";
                                            $resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['ID_Aparelho']."</td>
                                                    <td>".$cont['Cliente_Aparelho']."</td>
                                                    <td>".$cont['DescTipo']."</td>
                                                    <td>".$cont['Modelo']."</td>
                                                    <td>".$cont['DescMarca']."</td>
                                                    <td>".$cont['Cor']."</td>
                                                    <td>".$cont['DescSO']."</td>
                                                    <td>".$cont['Processador']."</td>
                                                    <td>".$cont['Placa_video']."</td>
                                                    <td>".$cont['DescRam']."</td>
                                                    <td>
                                                    <a href='editMachine.php?ID_Aparelho=".$cont['ID_Aparelho']."'target='new_blank'>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delMachine.php?ID_Aparelho=".$cont['ID_Aparelho']."'target=''>
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
				<!-- Three -->
					<section id="three" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Entre em contato</h2>
							<p>Nos mande uma mensagem pelo Email e acesse nossas redes sociais.</p>
							<div class="split style1">
								<section>
									
									<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=hiatec&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ultimatewp.net">UltimateWP</a></div><style>.mapouter{position:relative;text-align:right;height:300px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:600px;}</style></div><p><h3>Horário de funcionamento</h3></p>
									<table style="width: 100%">
										<tr>
                                         <th>Segunda</th>
                                         <th>Terça</th> 
                                         <th>Quarta</th>
                                         <th>Quinta</th>
                                         <th>Sexta</th> 
                                       </tr>
                                       <tr>
                                         <td>09:00h - 18:00h</td>
                                         <td>09:00h - 18:00h</td> 
                                         <td>09:00h - 18:00h</td>
                                         <td>09:00h - 18:00h</td>
                                         <td>09:00h - 18:00h</td> 
                                       </tr>                                    
									</table>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Endereço</h3>
											<span>Rua: Olegário Bueno da Silva<br />
											Nº311, Remanso Campineiro<br />
											Hortolândia/SP</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">suporte@hiatec.com</a>
										</li>
										<li>
											<h3>Telefone</h3>
											<span><ul>
												<li>(19) 3909-5287</li>
												<li>(19) 3504-1117</li>
											</ul></span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a target="new_blank" href="" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a target="new_blank" href="https://www.facebook.com/hiatec.hortolandia" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a target="new_blank" href="" class="fa-google-plus"><span class="label">Google Plus</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
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