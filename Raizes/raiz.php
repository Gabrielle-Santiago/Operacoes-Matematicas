<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="raiz.css">
</head>
<body>
    <h1>Informa um Número</h1>

    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">
            <input type="number" name="num" id="resuFinal" min="1" required>

            <input type="submit" value="Enviar">
        </label>
    </form>

    <div id="resul" style="color: black;">

    <?php

    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if ($num != 0) {
            $raizQuad = ($num ** 2);
            $raizCub = ($num ** 3);
            
            $raizQuad = number_format( $raizQuad, 2);
            $raizCub = number_format( $raizCub, 2);

            echo "Analisando o número <strong> $num, </strong> temos:
            <ul>
                <li> A raiz quadrada é $raizQuad
                <li> A raiz cúbica é $raizCub
            </ul>";
        }
    }
    ?>
    </div>
</body>
</html>