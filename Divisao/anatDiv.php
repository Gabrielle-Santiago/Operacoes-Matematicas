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
    
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

        <label for="anatDiv1">
            <input type="number" name="anatDiv1" id="anatDiv1" min="1" required>
        </label>
        <label for="anatDiv2">
            <input type="number" name="anatDiv2" id="anatDiv2" min="1" required>
        </label>

        <input type="submit" value="Enviar" id="button">
    </form>

    <div>
        <h1>Estrutura da Divisão</h1>
    </div>

 <section id="resul" class="resuFinal"> 
    
        <?php 
        $numUM = isset($_GET['anatDiv1']) ? $_GET['anatDiv1'] : 1;
        $numDOIS = isset($_GET['anatDiv2']) ? $_GET['anatDiv2'] : 1;
        
        $resul = '';
        $restDiv = '';

        if ($numUM != 0 && $numDOIS != 0) {
            $resul = ($numUM / $numDOIS);
            $restDiv = ($numUM % $numDOIS);
            $resul = number_format($resul, 2);
        }

        if ($numUM !== '' && $numDOIS !== '') : ?>
        <table class="divisao">
            <tr>
                <td><?=$numUM?></td>
                <td><?=$numDOIS?></td>
            </tr>
            <tr>
                <td><?=$restDiv?></td>
                <td><?=$resul?></td>
            </tr>
        </table>
    <?php endif ?>
    
    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</section>

</body>
</html>