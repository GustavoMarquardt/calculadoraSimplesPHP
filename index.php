<?php
session_start();
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $acao = $_POST['operacao'];
    header('Location: resultado.php?operacao='.$acao.'&num1='.$num1.'&num2='.$num2);
}
?>
<html>

<head>
    <title>Calculadora Simples</title>
</head>

<body>

    <form method="POST">
        <input type="number" name="num1" placeholder="numero1" id="num1" required>
        <select name="operacao" id="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>
        <input type="number" name="num2" placeholder="numero2" id="num2" required>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>