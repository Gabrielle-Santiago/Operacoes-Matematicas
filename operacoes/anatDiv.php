<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="CSS/operacao.css">
</head>
<body>
    <h1>Anatomia de Divisão</h1>

    <form action="http://localhost/Projetos/Operacoes-Matematicas/Operacoes-Matematicas/operacoes/anatDiv.php" method="get">

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

    <?php 
         $numUM = $_GET['anatDiv1'];
         $numDOIS = $_GET['anatDiv2'];

         $resul = ($numUM / $numDOIS);
         $restDiv = ($numUM % $numDOIS);

         //Quantidade de casas decimais
         if ($numUM != 0 && $numDOIS != 0) {
            $resul = number_format($resul, 2);

         echo "$numUM $numDOIS $restDiv $resul";
         }

    ?>
</body>
</html>