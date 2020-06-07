<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>
	<h3 align="center">Lista de Orçamentos</h3>
	<table style="border: " class="alt">
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
											$Cliente = $_POST['Cliente'];
											$OS = $_POST['OS'];
											$DataE = $_POST['DataE'];
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT a.OS,a.DataE,a.DataC,a.DataS,b.DescSituacao,c.Nome,d.Modelo,a.Servico,a.Reclamacao,a.Observacoes,a.Acessorios,e.DescPagamento,a.Garantia,f.DescDesconto,a.Parcelas,a.ValorF,g.NomeT FROM orcamento a  
INNER JOIN situacao b ON a.Situacao = b.ID_Situacao 
INNER JOIN cliente c ON a.Cliente = c.CPF
INNER JOIN aparelho d ON a.Aparelho = d.ID_Aparelho
INNER JOIN pagamento e ON a.Pagamento = e.ID_Pagamento
INNER JOIN desconto f ON a.Desconto = f.ID_Desconto
INNER JOIN tecnico g ON a.Responsavel = g.CPFT WHERE OS = '$OS' OR Nome = '$Cliente' OR DataE = '$DataE' ORDER BY OS DESC";

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
                                                    <td>".$cont['DescDesconto']."</td>
                                                    <td>".$cont['Parcelas']."</td>
                                                    <td>".$cont['ValorF']."</td>
                                                    <td>".$cont['NomeT']."</td>
                                                    <td>
                                                    <a href='editOS.php?OS=".$cont['OS']."'target='new_blank'>
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

</body>
</html>