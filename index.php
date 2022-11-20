

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora com PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form method="post">
        <input type="text" name="number1" class="text" placeholder="Primeiro número">
        <input type="text" name="number2" class="text" placeholder="Segundo número">
        <br>
        <label for="addition">+</label>
        <label for="subtraction">-</label>
        <label for="multiplication">*</label>
        <label for="division">/</label>
        <br>
        <input type="radio" name="operation" id="addition" value="+">
        <input type="radio" name="operation" id="subtraction" value="-">
        <input type="radio" name="operation" id="multiplication" value="*">
        <input type="radio" name="operation" id="division" value="/">
        <br>
        <input type="submit" value="Calcular" id="submit">
    </form>
    <?php
    if ($_POST["number1"] == NULL or $_POST["number2"] == NULL or $_POST["operation"] == NULL)
    {
        echo "VOCÊ DEVE PREENCHER TODOS OS CAMPOS!";
    }else {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];
        switch($operation){
            case '+':
                echo "<h1>".$number1.$operation.$number2."= ".$number1+$number2."</h1>";
                break;
            case '-':
                echo "<h1>".$number1.$operation.$number2."= ".$number1-$number2."</h1>";
                break;
            case '*':
                echo "<h1>".$number1.$operation.$number2."= ".$number1*$number2."</h1>";
                break;
            case '/':
                echo "<h1>".$number1.$operation.$number2."= ".$number1/$number2."</h1>"; 
                break;
        }
    }
?>
<div id="square"></div>
</div>
</body>
</html>
