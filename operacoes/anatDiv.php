<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
</head>
<body>
    <h1>Anatomia de Divisão</h1>

    <form action="http://localhost/Projetos/Operacoes-Matematicas/Operacoes-Matematicas/operacoes/anatDiv.php" method="get">

        <label for="num1">
            <input type="number" name="anatDiv1" id="num1" min="1" required>
        </label>
        <label for="num2">
            <input type="number" name="anatDiv2" id="num2" min="1" required>
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

         //Resultado da divisão
        
         echo "$numUM" . " $numDOIS" . " $restDiv" . " $resul";
    ?>
</body>
</html>