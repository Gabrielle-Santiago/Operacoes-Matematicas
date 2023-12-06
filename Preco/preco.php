<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="preco.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>
        <section id="resul" class="resulFinal">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

                <p>
                    Preço do Produto
                </p>
                <label for="produto">
                    <input type="number" name="produto" id="produto" min="0.10" step="0.01">
                </label>
            
                <div>
                <label for="reaj">
                    Qual será o percentual de reajuste?(<strong><span id="p">?%</span>%</strong>) <br></label>
                <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()">
                </div>
        
                <input type="submit" value="Reajustar" id="button">
            </form>
        </section>

        <script>
            mudaValor();
            function mudaValor() {
                p.innerText = reaj.value;
            }
        </script>
    </main>

    <div id="final" style="margin-top: 10px;">
    
        <?php

        if(isset($_GET['produto']) && isset($_GET['reaj'])){
        $produto = $_GET['produto'];
        $reaj = $_GET['reaj'];
       
            if ($produto) {
            
                $porc = ($produto * $reaj / 100);
                $soma = $porc + $produto; 
            
            echo 
                "<h2>
                    Resultado do Reajuste
                </h2>
                <p>
                    O produto que custava R$$produto, com $reaj% de aumento vai passar a custar R$$soma (a diferença é de R$$porc).
                </p>";
        }
    }
    
        ?>
    </div>

    <a href="https://gabrielle-santiago.github.io/Operacoes-Matematicas/" id="voltar">Voltar</a>
</body>
</html>