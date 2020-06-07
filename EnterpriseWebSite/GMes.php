<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
	<title>Gastos por mês</title>
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
                                        	$resultado = "SELECT ShopName,SUM(Total),MONTHNAME(OrderDate) from tbl_shop
left join tbl_order
on tbl_shop.ShopID = tbl_order.ShopID
GROUP By(ShopID),MONTHNAME(OrderDate)";

                                        	/*$sql = "SELECT a.OS, b.DescMes,a., FROM mytable group by date_format(mydate,'%U') as week";
                                            $resultado = mysqli_query($link,$sql);
                                            $sql1="SELECT * FROM mes ORDER BY DescMes";
                                            $sql2="SELECT * FROM orcamento where DataC BETWEEN '2016-04-12' AND '2016-04-14' ORDER BY data";

                                            if ($result=mysqli_query($link,$sql1))
                                              {
                                              // Return the number of rows in result set
                                              $rowcount=mysqli_num_rows($result);
                                              printf("Result set has %d rows.\n",$rowcount);
                                              // Free result set
                                              mysqli_free_result($result);
                                              }*/

                                        	while ($cont = mysqli_fetch_array($resultado)) {
                                        		echo "
                                        		<tr>
                                                    <td>".$cont['%d']."</td>
                                                    <td>".$cont['%d']."</td>
                                                    <td>".$cont['%d']."</td>
                                                    <td>".$cont['']."</td>
                                        		</tr>
                                        		";
                                        	}

                                        	?>
												
											</tbody>
										</table>

</body>
</html>