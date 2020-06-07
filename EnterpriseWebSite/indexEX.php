<!DOCTYPE HTML>
<!-- LOGIN
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php  session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }

$logado = $_SESSION['usuario']; 
?>
<html lang="en">
	<head>
		<title>HIATEC MANAGER</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- jQuery UI library -->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>        
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	</head>
	<body class="is-preload">
		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Bem-vindo <?php echo "$logado"?></a></li>
							<li><a href="#ten">Buscar</a></li>
							<li><a href="#six">Registros</a></li>
							<li><a href="#seven">Cadastrar técnico</a></li>
							<li><a href="#eight">Registrar orçamento</a></li>
                            <li><a href="#five">Estoque e gastos</a></li>
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
						</div>
					</section>

                <!-- Four -->
                <section id="ten" class="wrapper style4 fade-up">
                	<div class="inner">
                		<h2>Localizar cliente</h2>
                        <form name="frmBusca" method="post" action="LCliente.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <h3>Nome</h3>
                                    <input type="text" name="Cliente" id="nome" list="cliente" />
                                        <datalist name="Cliente" id="cliente" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Nome ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['Nome']."'>".$cont['Nome']."</option>";
    }
?>
                                            </datalist>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>CPF/CNPJ</h3>
                                    <input type="text" name="CPF" id="nome" list="aparelho" />
                                        <datalist name="CPF" id="aparelho" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY CPF ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['CPF']."'>".$cont['CPF']."</option>";
    }
?>
                                            </datalist>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>Email</h3>
                                    <input type="text" name="Email" id="nome" list="email" />
                                        <datalist name="Email" id="email" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Email ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['Email']."'>".$cont['Email']."</option>";
    }
?>
                                            </datalist></br>
                                    <input type="submit" value="Buscar" />
                                </div>
			       			</div>
                        </form>
                        <h2>Localizar maquina</h2>
                        <form name="frmBusca" method="post" action="LAparelho.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <h3>ID</h3>
                                    <input type="text" name="ID" id="nome" list="Id" />
                                        <datalist name="ID" id="Id" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM aparelho ORDER BY ID_Aparelho ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['ID_Aparelho']."'>".$cont['ID_Aparelho']."</option>";
    }
?>
                                            </datalist>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>Marca</h3>
                                    <select name="Marca" id="demo-category" >
                                        <option></option>
                                        <?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM marca ORDER BY DescMarca ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['ID_Marca']."'>".$cont['DescMarca']."</option>";
    }
?>
                                        </select>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>Cliente proprietário</h3>
                                    <input type="text" name="Cliente" id="nome" list="cliente" />
                                        <datalist name="Cliente" id="cliente" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Nome ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['Nome']."'>".$cont['Nome']."</option>";
    }
?>
                                            </datalist></br>
                                    <input type="submit" value="Buscar" />
                                </div>
                            </div>
                        </form>
                        <h2>Localizar ordem de serviço</h2>
                        <form name="frmBusca" method="post" action="LOS.php">
                            <div class="row gtr-uniform">
                                <div class="col-6 col-12-xsmall">
                                    <h3>OS</h3>
                                    <input type="text" name="OS" id="nome" list="os" />
                                        <datalist name="Cliente" id="os" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM orcamento ORDER BY OS ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['OS']."'>".$cont['OS']."</option>";
    }
?>
                                            </datalist>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>Cliente</h3>
                                    <input type="text" name="Cliente" id="nome" list="cliente" />
                                        <datalist name="Cliente" id="cliente" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Nome ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['Nome']."'>".$cont['Nome']."</option>";
    }
?>
                                            </datalist>
                                </div>
                                <div class="col-6 col-12-xsmall">
                                    <h3>Data de chegada</h3>
                                    <input type="date" name="DataE" /></p>
                                    <input type="submit" value="Buscar" />
                                </div>
                            </div>
                        </form>
                	</div>
                </section>
                    
                        <section id="six" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Registros</h2>
                            <p>Registros de clientes e suas máquinas.</p>
							<div class="table-wrapper">
								<h3>Clientes</h3>
										<table class="alt">
											<thead>
												<tr>
													<th>CPF/CNPJ</th>
													<th>Nome</th>
													<th>Senha</th>
													<th>Email</th>
													<th>Telefone</th>
													<th>Celular</th>
													<th>Endereço</th>
													<th>CEP</th>
													<th>Numero</th>
													<th>Bairro</th>
													<th>Cidade</th>
													<th>Estado</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT a.CPF, a.Nome, a.Senha, a.Email, a.Telefone,a.Celular, a.Endereco, a.CEP,a.Numero,a.Bairro, a.Cidade, b.DescEstado FROM cliente a   
INNER JOIN estado b ON a.Estado = b.ID_Estado ORDER BY Nome DESC";

                                        	$resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['CPF']."</td>
                                                    <td>".$cont['Nome']."</td>
                                                    <td>".$cont['Senha']."</td>
                                                    <td>".$cont['Email']."</td>
                                                    <td>".$cont['Telefone']."</td>
                                                    <td>".$cont['Celular']."</td>
                                                    <td>".$cont['Endereco']."</td>
                                                    <td>".$cont['CEP']."</td>
                                                    <td>".$cont['Numero']."</td>
                                                    <td>".$cont['Bairro']."</td>
                                                    <td>".$cont['Cidade']."</td>
                                                    <td>".$cont['DescEstado']."</td>
                                                    <td>
                                                    <a href='editCliente.php?CPF=".$cont['CPF']."'target=''>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delCliente.php?CPF=".$cont['CPF']."'target=''>
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
										<h3>Máquinas</h3>
										<div class="table-wrapper">
										<table class="alt">
										    <thead>
												<tr>
													<th>ID</th>
                                                    <th>Dono</th>
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
                                 
                                        	$sql = "SELECT a.ID_Aparelho,a.Cliente_Aparelho, b.DescTipo, a.Modelo, c.DescMarca, a.Cor, d.DescSO, a.Processador, a.Placa_video, e.DescRAM FROM aparelho a   
INNER JOIN tipo b ON a.Tipo = b.ID_Tipo
INNER JOIN marca c ON a.Marca = c.ID_Marca
INNER JOIN so d ON a.SO = d.ID_SO
INNER JOIN ram e ON a.RAM = e.ID_Ram ORDER BY ID_Aparelho DESC";
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
                                                    <td>".$cont['DescRAM']."</td>
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
										</p>
										<h3>Técnicos</h3>
										<div class="table-wrapper">
										<table class="alt">
										    <thead>
												<tr>
													<th>CPF/CNPJ</th>
													<th>Nome</th>
													<th>Idade</th>
													<th>Telefone</th>
													<th>Email</th>
												</tr>
											</thead>
											<tbody>
												<?php
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT * FROM tecnico WHERE Idade > 1 ORDER BY NomeT DESC";
                                        	$resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['CPFT']."</td>
                                                    <td>".$cont['NomeT']."</td>
                                                    <td>".$cont['Idade']."</td>
                                                    <td>".$cont['Telefone']."</td>
                                                    <td>".$cont['Email']."</td>
                                                    <td>
                                                    <a href='editTecnico.php?CPFT=".$cont['CPFT']."'target='new_blank'>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delTecnico.php?CPFT=".$cont['CPFT']."'target=''>
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
										</p>
										<h3>Orçamentos</h3>
										<div class="table-wrapper">
										<table class="alt">
										    <thead>
												<tr>
													<th>OS</th>
													<th>Data de chegada</th>
													<th>Data de conclusão</th>
													<th>Data de saida</th>
													<th>Situação</th>
													<th>Cliente</th>
													<th>Aparelho</th>
                                                    <th>Serviço</th>
													<th>Reclamação</th>
													<th>Observações</th>
													<th>Acessórios</th>
													<th>Pagamento</th>
													<th>Garantia</th>
													<th>Desconto</th>
                                                    <th>Nº de parcelas</th>
													<th>Valor final</th>
													<th>Responsável</th>
												</tr>
											</thead>
											<tbody>	
													<?php
                                        	require('ConexaoBD.php');
                                $sql = "SELECT a.OS,a.DataE,a.DataC,a.DataS,b.DescSituacao,c.Nome,d.Modelo,a.Servico,a.Reclamacao,a.Observacoes,a.Acessorios,e.DescPagamento,a.Garantia,a.Desconto,a.Parcelas,a.ValorF,g.NomeT FROM orcamento a 
                                            INNER JOIN situacao b ON a.Situacao = b.ID_Situacao 
                                            INNER JOIN cliente c ON a.Cliente = c.CPF
                                            INNER JOIN aparelho d ON a.Aparelho = d.ID_Aparelho
                                            INNER JOIN pagamento e ON a.Pagamento = e.ID_Pagamento
                                            INNER JOIN tecnico g ON a.Responsavel = g.CPFT ORDER BY OS DESC";
                                        	$resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['OS']."</td>
                                                    <td>".$cont['DataE']."</td>
                                                    <td>".$cont['DataC']."</td>
                                                    <td>".$cont['DataS']."</td>
                                                    <td>".$cont['DescSituacao']."</td>
                                                    <td>".$cont['Nome']."</td>
                                                    <td>".$cont['Modelo']."</td>
                                                    <td>".$cont['Servico']."</td>
                                                    <td>".$cont['Reclamacao']."</td>
                                                    <td>".$cont['Observacoes']."</td>
                                                    <td>".$cont['Acessorios']."</td>
                                                    <td>".$cont['DescPagamento']."</td>
                                                    <td>".$cont['Garantia']."</td>
                                                    <td>".$cont['Desconto']."</td>
                                                    <td>".$cont['Parcelas']."</td>
                                                    <td>".$cont['ValorF']."</td>
                                                    <td>".$cont['NomeT']."</td>
                                                    <td>
                                                    <a href='editOS.php?OS=".$cont['OS']."'target=''>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delOS.php?OS=".$cont['OS']."'target=''>
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
                    <section id="seven" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Cadastro</h2>
                            <p>Cadastro do técnico.</p>
							<form method="post" action="cadTec.php">
								<div class="row gtr-uniform">
									<div class="col-12 col-12-xsmall">
										<label>Nome:</label>
										<input type="text" name="NomeT" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>CPF/CNPJ:</label>
										<input type="text" name="CPFT" id="demo-name" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Idade:</label>
										<input type="text" name="Idade" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Telefone:</label>
										<input type="text" name="Tel" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Email:</label>
										<input type="text" name="Email" id="demo-email" value=""/>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Cadastrar" class="primary"/></li>
											<li><input type="reset" value="Limpar"/></li>
										</ul>
									</div>
								</div>
						    </form>
                        </div>
                    </section>
                    <section id="eight" class="wrapper style4 fade-up">
                    	<div class="inner">
                    		<h2>Orçamento</h2></p>
							<form method="post" action="cadOS.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<label>Data da chegada:</label>
										<?php date_default_timezone_set('America/Sao_Paulo');?>
                                        <input name="DataE" type="date" value="<?php echo date('Y-m-d'); ?>" />
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Data da conclusão:</label>
										<input type="date" name="DataC" id="demo-name" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Data da saida:</label>
										<input type="date" name="DataS" id="demo-name" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Situação:</label>
										<select name="Situacao" id="demo-category">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM situacao ORDER BY ID_Situacao DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Situacao']."'>".$cont['DescSituacao']."</option>";
	}
?>
                                        </select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Cliente(CPF):</label>
                                        <input type="text" name="Cliente" id="nome" list="alo" />
										<datalist name="Cliente" id="alo" >
<?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM cliente ORDER BY Nome DESC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['CPF']."'>".$cont['Nome']."</option>";
    }
?>
                                            </datalist>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Aparelho:</label>
                                        <input type="text" name="Aparelho" list="ola">
										<datalist name="Aparelho" id="ola">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM aparelho a ORDER BY Modelo DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Aparelho']."'>".$cont['Cliente_Aparelho']."</option>";
	}
?>
                                        </datalist>
									</div>
                                    <div class="col-12 col-12-xsmall">
                                        <label>Serviço realizado:</label>
                                        <input type="text" name="Servico" id="demo-category" value="">
                                    </div>
									<div class="col-12 col-12-xsmall">
										<label>Reclamação:</label>
										<input type="text" name="Reclamacao" id="demo-category" value="">
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Observações:</label>
										<input type="text" name="Observacoes" id="demo-category" value="">
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Acessórios:</label>
										<input type="text" name="Acessorios" id="demo-category" value="">
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Forma de pagamento:</label>
										<select name="Pagamento" id="demo-category">
										<?php
	require('ConexaoBD.php');
	$sql = "SELECT * FROM pagamento ORDER BY DescPagamento DESC";
	$resultado = mysqli_query($link,$sql);
	while ($cont = mysqli_fetch_array($resultado)) {
		echo "<option value='".$cont['ID_Pagamento']."'>".$cont['DescPagamento']."</option>";
	}
?>
                                        </select>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Garantia:</label>
										<input type="text" name="Garantia" id="demo-category" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Desconto:</label>
										<input type="text" name="Desconto" id="demo-category" value=""/>
									</div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Nª de parcelas:</label>
                                        <input type="text" name="Parcelas" id="demo-email" value=""/>
                                    </div>
									<div class="col-6 col-12-xsmall">
										<label>Valor final:</label>
										<input type="text" name="ValorF" id="demo-email" value=""/>
									</div>
									<div class="col-6 col-12-xsmall">
										<label>Responsável pelo serviço:</label>
										<select name="Tecnico" id="demo-category">
                                            <?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM tecnico ORDER BY NomeT ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['CPFT']."'>".$cont['NomeT']."</option>";
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
                    </section>
                    <section id="five" class="wrapper style4 fade-up">
                        <div class="inner">
                            <h2>Registrar produto</h2><span class="image right"><a href="Estoque.php" target="new_blank">Ver estoque</a></span></p>
                            <form method="post" action="cadProd.php">
                                <div class="row gtr-uniform">
                                    <div class="col-12 col-12-xsmall">
                                        <label>Produto:</label>
                                        <input type="text" name="DescProduto" id="demo-email" value=""/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>ValorUnit:</label>
                                        <input type="text" value="R$" name="ValorUnit" id="demo-name" value=""/>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Garantia:</label>
                                        <input type="text" name="Garantia" id="demo-email" value=""/>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="Registrar" class="primary"/></li>
                                            <li><input type="reset" value="Limpar"/></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                                    <h2>Gastos e vendas</h2>
                            <h3>Registrar gasto</h3><span class="image right"><a href="Gastos.php" target="new_blank">Ver gastos</a></span></p>
                            <form method="post" action="cadGastos.php">
                                <div class="row gtr-uniform">
                                    <div class="col-12 col-12-xsmall">
                                        <label>Produto:</label>
                                        <select name="Produto" id="demo-category">
                                        <?php
    require('ConexaoBD.php');
    $sql = "SELECT * FROM produto ORDER BY DescProduto ASC";
    $resultado = mysqli_query($link,$sql);
    while ($cont = mysqli_fetch_array($resultado)) {
        echo "<option value='".$cont['ID_Produto']."'>".$cont['DescProduto']."</option>";
    }
?>
                                        </select>
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Data da compra:</label>
                                        <?php date_default_timezone_set('America/Sao_Paulo');?>
                                        <input name="DataC" type="date" value="<?php echo date('Y-m-d'); ?>" />
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <label>Quantidade:</label>
                                        <input type="text" name="Qtd" id="demo-email" value=""/>
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
                    </section>
                    <!--<section id="four" class="wrapper style4 fade-up">
                        <div class="inner">
                            <h2>Relatórios</h2>
                            <p>Gerar relatórios.</p>
                            <p><a href="LMes.php"><input type="submit" value="Lucro por mês" class="primary"/></a></p>
                            <p><a href="OSemana.php"><input type="submit" value="Orçamentos terminados por semana" class="primary"/></a></p>
                            <a href="GMes.php"><input type="submit" value="Gastos por mês" class="primary"/></a>
                        </div>
                    </section>-->


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