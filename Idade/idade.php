<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Idade</title>
    <link rel="stylesheet" href="idade.css">
</head>
<body>
    <h1>Calculando a sua Idade</h1>

    <div id="formulario">
        <form method="get" action="<?= $_SERVER['PHP_SELF'] ?>">

            <label for="nasc">
                <p>Em que ano você nasceu?</p>
                <input type="text" name="nasc" class="val" pattern="\d{4}" title="Digite exatamente quatro dígitos!!" min="1" required>
            </label>

            <label for="ano">
                <p>Quer saber sua idade em que ano?</p>
                <input type="text" name="ano" class="val" pattern="\d{4}" title="Digite exatamente quatro dígitos!!" min="1" required>
            </label>
            
            <input type="submit" value="Qual será minha idade?" class="val" style="margin-top: 10px;">
        </form>
    </div>
    <div id="resul" class="resuFinal">
        <?php 

        if (isset($_GET['nasc'])) {
            $nasc = $_GET['nasc'];
            $ano = $_GET['ano'];

            if ($nasc != 0 && $ano != 0 && $nasc < $ano) {
                $resul = ($ano - $nasc);

                echo "<h2>Resultado<h2/>
                <p>Quem nasce em $nasc vai ter $resul em $ano!</p>";
            } else {
                echo "<p>Escolha um valor válido!!</p>";
            }
        }
        ?>
    </div>
    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</body>
</html>