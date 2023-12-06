<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="med.css">
    <!-- Algumas partes do CSS, estão misturadas no HTML, pois o CSS simplesmente não quer fazer as alterações -->
</head>

<body>
    <div id="formulario" style="margin: auto;">
        <form method="get" action="<?=$_SERVER['PHP_SELF']?>">

            <p>1° Valor</p>
            <label for="valor1">
                <input type="number" name="valor1" id="" class="val" min="1" required>
            </label>

            <p>1° Peso</p>
            <label for="peso1">
                <input type="number" name="peso1" id="" class="val" min="1" required>
            </label>

            <p>2° Valor</p>
            <label for="valor2">
                <input type="number" name="valor2" id="" class="val" min="1" required>
            </label>

            <p>2° Peso</p>
            <label for="peso2">
                <input type="number" name="peso2" id="" class="val" min="1" required>
            </label>

            <input type="submit" value="Enviar" class="val" id="button" style="margin-top: 10px; height: 40px; width: 120px;">
        </form>
    </div>
    <div id="resul" class="resuFinal" style="border-radius: 10px;  margin-top: 10px; height: 250px; padding: 10px; text-indent: 10px;">
        <?php
        
        echo "<h2>Cálculo das Médias</h2>"; 

        if (isset($_GET['valor1'])) {
            $valor1 = $_GET['valor1'];
            $valor2 = $_GET['valor2'];

            if ($valor1 != 0 && $valor2 != 0) {
                $peso1 = $_GET['peso1'];
                $peso2 = $_GET['peso2'];

                $medSimples = ($valor1 + $valor2) / 2;

                $medPonderada = ($peso1 * $valor1 + $peso2 * $valor2) / ($peso1 + $peso2);

                $medPonderada = number_format($medPonderada,2);

                echo "<p>
                Analisando os valores $valor1 e $valor2:
                </p>
                <p>
                <ul>
                    <li>
                        A <strong>Média Aritmética Simples<strong/> entre os valores é igual a $medSimples
                    </li>
                    <li>
                        A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $medPonderada
                    <li/>
                <ul/>
                </p>";
            }
        }
        ?>
    </div>

    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</body>

</html>