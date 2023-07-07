<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="../style.css">
</head>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;

        $restoDivisao = $dividendo % $divisor;
        $resultadoDivisao = $dividendo / $divisor;
    ?>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
            <tr>
                <td><?php echo $dividendo ?></td>
                <td id="divisor"><?php echo $divisor ?></td>
            </tr>
            <tr>
                <td><?php echo $restoDivisao ?></td>
                <td id="divisao"><?php echo (int) $resultadoDivisao ?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>