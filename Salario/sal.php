<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="sal.css">
</head>
<body>
    <header>
        <h1>Informe seu Salário</h1>
    </header>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

        <label for="salario">
            <input type="number" name="salario" min="1" required>
        </label>

        <input id="button" type="submit" value="Enviar">

    </form>


    <p>Considerando o salário mínimo de R$1.380,00</p>
        
    <div id="resul" class="resuFinal">
        <h2 style="color: black;">Resultado Final</h2>
        <?php
            
            if (isset($_GET['salario'])) {
                $salario = $_GET['salario'];

                if($salario != 0){
                    $resul = ($salario / 1380);
                    $rest = ($salario % 1380);
                    $resul = number_format($resul, 0);
                    $rest = number_format($rest, 2);

                    echo "<p>Seu salário equivale a $resul salários mínimos + R$$rest reais.</p>";
                }
            }
        ?>
    </div>
    <div>
        <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
    </div>
</body>
</html>