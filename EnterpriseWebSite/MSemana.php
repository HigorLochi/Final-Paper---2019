<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script>
		function cont(){
			this.window.print();
			this.window.close();
		}
		window.onload = cont();
		window.onafterprint = function(){
			history.go(-1);
		};
	</script>
	<h3 align="center">Lista de aparelhos</h3>
	<table class="alt" style="border: 1px solid black; width: 100%">
										    <thead>
												<tr>
													<th>Mês</th>
                                                    <th>Quantidade de Clientes</th>
													<th>Quantidade de OSs</th>
													<th>Lucro</th>
												</tr>
											</thead>
											<tbody>
												
													<?php
                                        	require('ConexaoBD.php');
                                        	$sql = "SELECT a.OS, b.DescMes,a., FROM mytable group by date_format(mydate,'%U') as week";
                                            $resultado = mysqli_query($link,$sql);
                                        	$inc = 0;
                                        	$incCliente = 0;
                                        	$incAparelho = 0;
                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		$incCliente++;
                                        		$incAparelho++;
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['DesMes']."</td>
                                                    <td>".$cont['$incCliente']."</td>
                                                    <td>".$cont['$incAparelho']."</td>
                                                    <td>".$cont['$Soma']."</td>
                                        		</tr>
                                        		";
                                        	}

                                        	?>
												
											</tbody>
										</table>

</body>
</html>