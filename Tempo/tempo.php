<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="tempo.css">
</head>
<body>
    <h1>Calculadora de Tempo</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="segundo">
            <input type="number" name="segundo" min="1" required>
        </label>

        <input type="submit">

        <input type="submit" id="voltar">
    </form>

    <section id="resul" class="resuFinal">
        <?php
        if (isset($_GET['segundo'])) {
            $segundo = $_GET['segundo'];

            if ($segundo != 0) {
                //a lógica está errada, está calulando cada um separadamente e não em conjunto
                $segundos = floor($segundo % 60);
                
                $minutos = floor($segundo / 60); 
                
                $horas = floor($minutos / 60);

                $dias = floor($horas / 24);

                $semanas = floor($dias / 7);

                echo"<p>Analisando o valor que você digitou, $segundo segundos equivalem a um total de:
                <ul>
                <li>$semanas semanas</li>
                <li>$dias dias</li>
                <li>$horas horas</li>
                <li>$minutos minutos</li>
                <li>$segundos segundos</li>
                </ul>
                </p>";
            }
        }
        ?>
    </section>
</body>
</html>