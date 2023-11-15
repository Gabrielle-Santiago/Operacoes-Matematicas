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

    <form action="">
        <label for="">
            <input type="number" name="num" id="num" min="1" required>
        </label>
    </form>

    <p>Considereando o salário mínimo de R$1.380,00</p>

    <div id="resul">
        <h2 style="color: black;">Resultado Final</h2>
    </div>
    
    <div class="resuFinal">
        <?php
            //Explicação: Salário vai ser dividido pelo salário mínimo e essa será a quantidade que salários que a pessoa recebe e o resto "%" será a sobra do salário correspondente
            
        ?>
    </div>
</body>
</html>