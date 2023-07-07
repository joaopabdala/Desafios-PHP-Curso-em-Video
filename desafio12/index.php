<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../style.css">


</head>
<?php 
    
    $valorRecebido = $_GET["v1"] ?? 1;
    $semana = $valorRecebido / 604800;
    $restoSemana = $valorRecebido % 604800;
    $dia = $restoSemana / 86400;
    $restoDia = $restoSemana % 86400;
    $hora =   $restoDia / 3600;
    $restoHora =   $restoDia % 3600;
    $minuto =   $restoHora / 60;
    $segundos =   $restoHora % 60;
    

?>
<body>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Qual é o total de segundos?</label>
            <input type="number" name="v1" id="v1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor <strong><?= $valorRecebido?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <?php 
            echo"<li>". (int)$semana." semanas</li>";
            echo"<li>".(int)$dia." dias</li>";
            echo"<li>".(int)$hora." horas</li>";
            echo"<li>".(int)$minuto." minutos</li>";
            echo"<li>".(int)$segundos." segundos</li>";
        ?>
        </ul>
    </section>
</body>

</html>