<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
$num = $_GET["numero"] ?? 0;
$raizQuadrada = sqrt($num);
$raizCubica = pow($num, 1/3);

?>

<body>
    <main>
        <h1>Informe seu número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Calcular raizes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        echo "<p>Analisando <strong> o número " .$num."</strong>, temos:</p>";
        echo "<ul><li>A sua raiz quadrade é: <strong>" . number_format($raizQuadrada, 3, "," , ".") . "</strong></li>";
        echo "<li>A sua raiz cúbica é: <strong>" .number_format($raizCubica, 3, ",", "."). "</strong></li></ul>";
        ?>
    </section>
</body>

</html>