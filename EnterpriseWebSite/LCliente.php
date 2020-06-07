<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>
	<!--<script>
		function cont(){
			this.window.print();
			this.window.close();
		}
		window.onload = cont();
		window.onafterprint = function(){
			history.go(-1);
		};
	</script>-->
	<h3 align="center">Lista de clientes</h3>
	<table style="border: 1px solid black;width: 100%" class="alt">
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
											$Cliente = $_POST['Cliente'];
											$CPF = $_POST['CPF'];
											$Email = $_POST['Email'];
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT a.CPF, a.Nome, a.Senha, a.Email, a.Telefone,a.Celular, a.Endereco, a.CEP,a.Numero,a.Bairro, a.Cidade, b.DescEstado FROM cliente a   
INNER JOIN estado b ON a.Estado = b.ID_Estado WHERE CPF = '$CPF' OR Nome = '$Cliente' OR Email = '$Email' ORDER BY Nome ASC";

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

</body>
</html>