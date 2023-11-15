<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="anatDiv.css">
</head>
<body>
    <h1>Anatomia de Divisão</h1>

    <!-- Verificar a página pois está no localhost -->
    <form action="http://localhost/Projetos/Operacoes-Matematicas/Operacoes-Matematicas/Divisao/anatDiv.php" method="get">

        <label for="anatDiv1">
            <input type="number" name="anatDiv1" id="anatDiv1" min="1" required>
        </label>
        <label for="anatDiv2">
            <input type="number" name="anatDiv2" id="anatDiv2" min="1" required>
        </label>

        <input type="submit" value="Enviar">
    </form>

    <div>
        <h1>Estrutura da Divisão</h1>
    </div>
    <div id="resul" class="parag">
    

    <?php 
         if (isset($_GET['anatDiv1']) && isset($_GET['anatDiv2'])) {
            $numUM = $_GET['anatDiv1'];
            $numDOIS = $_GET['anatDiv2'];

         //Quantidade de casas decimais
         if ($numUM != 0 && $numDOIS != 0) {
            $resul = ($numUM / $numDOIS);
            $restDiv = ($numUM % $numDOIS);
            $resul = number_format($resul, 2);

            echo "<p>$numUM $numDOIS $restDiv $resul</p>";
         }
        }
    ?>
    </div>
</body>
</html>