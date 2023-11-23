<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="med.css">
</head>
<body>
    <div id="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <p>1° Valor</p>
            <label for="">
                <input type="number" name="" id="" class="val">
            </label>
            <p>1° Peso</p>
            <label for="">
                <input type="number" name="" id="" class="val">
            </label>
            <p>2° Valor</p>
            <label for="">
                <input type="number" name="" id="" class="val">
            </label>
            <p>2° Peso</p>
            <label for="">
                <input type="number" name="" id="" class="val">
            </label>

            <input type="submit" value="Enviar" class="val" style="margin-top: 10px;">
        </form>
    </div>
    <div id="resul" class="resuFinal">
        <?php
        //o objetivo é calcular a média aritmética simples e ponderada
        echo "<h1>Cálculo das Médias</h1>"; 
        ?>
    </div>

    <input type="submit" value="Voltar" id="voltar">
</body>
</html>