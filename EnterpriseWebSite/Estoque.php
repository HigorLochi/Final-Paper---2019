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
                            <h2 style="padding-left: 5%">Estoque</h2>
    <div class="table-wrapper">
                                        <table class="alt" style="width: 60%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>Valor unitário</th>
                                                    <th>Garantia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            require('ConexaoBD.php');
                                            $sql = "SELECT * FROM produto ORDER BY DescProduto DESC";
                                            $resultado = mysqli_query($link,$sql);
                                            $inc = 0;
                                            while ($cont = mysqli_fetch_array($resultado)) {
                                                echo "
                                                <tr>
                                                    <td>".$cont['ID_Produto']."</td>
                                                    <td>".$cont['DescProduto']."</td>
                                                    <td>".$cont['ValorUnit']."</td>
                                                    <td>".$cont['Garantia']."</td>
                                                    <td>
                                                    <a href='editProd.php?ID_Produto=".$cont['ID_Produto']."'target='new_blank'>
                                                    Editar
                                                    </a>
                                                    </td>
                                                    <td>
                                                    <a href='delProd.php?ID_Produto=".$cont['ID_Produto']."'target=''>
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