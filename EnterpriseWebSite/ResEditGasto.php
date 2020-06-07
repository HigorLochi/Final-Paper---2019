<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="shortcut icon" type="image/x-icon" href="images/HM.png">
</head>
<body>

    <?php
$ID_Compra = $_POST['ID'];
$Produto = $_POST['Produto'];
$DataC = $_POST['DataC'];
$Quantidade = $_POST['Quantidade'];

require ('ConexaoBD.php');

$sqlupdate = "UPDATE compra SET Produto = '$Produto', DataC = '$DataC',Quantidade = '$Quantidade' WHERE ID_Compra = '$ID_Compra'"; 

mysqli_query($link,$sqlupdate) or die("ERRO");

echo "<div id='wrapper'>
                    
                <!-- Four -->
                    <section id='four' class='wrapper style10 fade-up'>
                        <div class='inner'>
                                    <h2>Dados editados</h2>
                                    <button onclick='goBack()''>Voltar</button>
                                    <script>
function goBack() {
  window.history.go(-2);
}
</script>                                          
                            </form>
                        </div>
                    </section>
            </div>";

?>

</body>
</html>