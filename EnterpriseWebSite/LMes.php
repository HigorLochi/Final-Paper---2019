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
	<h3 align="center">Lucro por mês</h3>
	<table class="alt" style="border: 1px solid black; width: 100%">
										   
												<tr>
													<td>Mês</td>
                                                    <td>Quantidade de Clientes</td>
													<td>Quantidade de OSs</td>
													<td>Lucro</td>
												</tr>
											
												
											<?php
                                        	require('ConexaoBD.php');

                                        	$sql = "SELECT DataE, COUNT(cliente), COUNT(OS), SUM(ValorF) FROM `orcamento` WHERE DataE BETWEEN '2019-08-28' AND '2019-08-30' AND DataS BETWEEN '2019-08-28' AND '2019-08-30' ORDER BY DataE";
                                        	$sql2 = "SELECT MONTH(to.OrderDate), DataE, COUNT(cliente), COUNT(OS), SUM(ValorF) FROM `orcamento` as to GROUP BY MONTH(to.OrderDate)";

                                            $resultado = mysqli_query($link,$sql);

                                        	while ($cont = mysqli_fetch_array($resultado)) {
                        
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['DataE']."</td>
                                                    <td>".$cont['COUNT(cliente)']."</td>
                                                    <td>".$cont['COUNT(OS)']."</td>	
                                                    <td>".$cont['SUM(ValorF)']."</td>
                                        		</tr>
                                        		";
                                        		


                                        	}

                                        	?>
												
											
										</table>

</body>
</html>