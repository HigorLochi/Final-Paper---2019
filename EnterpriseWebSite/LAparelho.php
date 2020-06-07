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
	<h3 align="center">Lista de aparelhos</h3>
	<table class="alt" style="border: 1px solid black;width: 100%">
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
                                            $ID = $_POST['ID'];
                                            $Marca = $_POST['Marca'];
                                            $Cliente = $_POST['Cliente'];
                                        	$sql = "SELECT a.ID_Aparelho,a.Cliente_Aparelho, b.DescTipo, a.Modelo, c.DescMarca, a.Cor, d.DescSO, a.Processador, a.Placa_video, e.DescRAM, c.ID_Marca FROM aparelho a   
INNER JOIN tipo b ON a.Tipo = b.ID_Tipo
INNER JOIN marca c ON a.Marca = c.ID_Marca
INNER JOIN so d ON a.SO = d.ID_SO
INNER JOIN ram e ON a.RAM = e.ID_Ram WHERE Cliente_Aparelho = '$Cliente' OR ID_Aparelho = '$ID' OR ID_Marca = '$Marca' ORDER BY ID_Aparelho ASC";
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

</body>
</html>