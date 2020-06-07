<!DOCTYPE html>
<html>
<head>
    <title>Estoque</title>
    <meta charset="utf-8" />
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
<body>
<div class="inner">
                            <h2 style="padding-left: 5%">Gastos</h2>
    <div class="table-wrapper">
                                        <table class="alt" style="width: 60%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Produto</th>
                                                    <th>Data da compra</th>
                                                    <th>Quantidade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            require('ConexaoBD.php');
                                            $sql = "SELECT * FROM compra a
                                            INNER JOIN produto b ON a.Produto = b.ID_Produto ORDER BY DataC DESC";
                                            $resultado = mysqli_query($link,$sql);
                                            $inc = 0;
                                            while ($cont = mysqli_fetch_array($resultado)) {
                                                echo "
                                                <tr>
                                                    <td>".$cont['ID_Compra']."</td>
                                                    <td>".$cont['DescProduto']."</td>
                                                    <td>".$cont['DataC']."</td>
                                                    <td>".$cont['Quantidade']."</td>
                                                    <td>
                                                    <a href='editGasto.php?ID_Compra=".$cont['ID_Compra']."'target=''>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delGasto.php?ID_Compra=".$cont['ID_Compra']."'target=''>
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

</body>
</html>