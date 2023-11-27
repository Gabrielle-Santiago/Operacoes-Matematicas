<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="caixa.css">
</head>
<body>
    <?php 
    $valor = isset($_GET['valor']) ? $_GET['valor'] : 0;?>
    
    <h1>Caixa Eletrônico</h1>
    <div id="resul" class="resulFinal">
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <p>
                Qual valor você deseja sacar?(R$)
            </p>
            <label for="valor">
                <input type="number" name="valor" id="valor" min="2">
            </label>
            <p>
                *Notas disponiveis: R$100, R$50, R$20, R$10, R$5 e R$2
            </p>

            <input type="submit" value="Sacar">
        </form>
    </div>
    <section class="resulFinal" id="saque">
        <h2>Saque de R$<?= $valor?> realizado</h2>

        <p>
            O caixa eletrônico vai te entregar as seguintes notas:
        </p>

        <ul>
            <li>
                <img src="img/100-reais.jpg" alt="cemReais" class="notas">
                    <div class="valores">
                        <?php
                        $cemReais = floor($valor / 100);
                        $restCem = ($valor % 100);
                        echo"x $cemReais";
                        ?>
                    </div>
            </li>
            <li>
                <img src="img/50-reais.jpg" alt="cinqReais" class="notas">
                    <div class="valores">
                        <?php
                        $cinqReais = floor($restCem / 50);
                        $restCinq = ($valor % 50);
                        echo"x $cinqReais<br>";
                        ?>
                    </div>
            </li>
            <li>
                <img src="img/20-reais.jpg" alt="vintReais" class="notas">
                    <div class="valores">
                        <?php 
                        $vintReais = floor($restCinq / 20);
                        $restVinte = ($restCinq % 20);
                        echo"x $vintReais<br>";
                        ?>
                    </div>
            </li>
            <li>
                <img src="img/10-reais.jpg" alt="dezReais" class="notas">
                    <div class="valores">
                        <?php 
                        $dezReais = floor($restVinte / 10);
                        $restDez = ($valor % 10);
                        echo"x $dezReais <br>";
                        ?>
                    </div>
            </li>
            <li>
                <img src="img/5-reais.jpg" alt="cincReais" class="notas">
                    <div class="valores">
                        <?php 
                        $cincReais = floor($restDez / 5);
                        $restCinc = ($valor % 5);
                        echo"x $cincReais";
                        ?>
                    </div>
            </li>
            <li>
                <img src="img/2-reais.jpg" alt="doisReais" class="notas">
                    <div class="valores">
                        <?php 
                        $doisReais = floor($restCinc / 2);
                        echo"x $doisReais";
                        ?>
                    </div>
            </li>
        </ul>
    </section>

    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>

</body>
</html>