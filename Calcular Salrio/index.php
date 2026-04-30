<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário</title>
</head>
<body style="display:flex; justify-content:center; align-items:center; height:100vh; font-family:Arial;">

    <form action="calcularSalario.php" method="post" style="text-align:center;">
        <h2>Cálculo de Salário</h2>

        <p>
            Horas trabalhadas:<br>
            <input type="text" name="txthoras" required>
        </p>

        <p>
            Valor por hora:<br>
            <input type="text" name="txtvalor" required>
        </p>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>

</body>
</html>