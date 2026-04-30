<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body style="text-align:center; font-family:Arial; margin-top:100px;">

    <h2>Resultado</h2>

    <?php
        $horas = $_POST["txthoras"];
        $valor = $_POST["txtvalor"];
        $salario = $horas * $valor;

        echo "<p>Salário: R$ " . number_format($salario, 2, ",", ".") . "</p>";
    ?>

    <a href="index.html">Voltar</a>

</body>
</html>