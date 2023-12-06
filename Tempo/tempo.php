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
                
                $semanas = floor($segundo / 604800); // 604800 segundos em uma semana
                $restoSemanas = $segundo % 604800;
    
                $dias = floor($restoSemanas / 86400); // 86400 segundos em um dia
                $restoDias = $restoSemanas % 86400;
    
                $horas = floor($restoDias / 3600); // 3600 segundos em uma hora
                $restoHoras = $restoDias % 3600;
    
                $minutos = floor($restoHoras / 60); // 60 segundos em um minuto
                
                $segundos = $restoHoras % 60;
    

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
    
    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</body>
</html>