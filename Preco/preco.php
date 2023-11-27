<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="preco.css">
</head>
<body>
    <h1>Reajustador de Preços</h1>

    <section id="resul" class="resulFinal">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <p>Preço do Produto</p>
            <label for="">
                <input type="number" name="" id="">
            </label>

            <p>Qual será o percentual de reajuste?</p>

            <div class="progress-bar"></div>
            
            <input type="submit" value="Reajustar">
        </form>
    </section>

    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</body>
</html>