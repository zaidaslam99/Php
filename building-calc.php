<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <form action="building-calc.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>
    <!-- Using $_GET[name-property] we can access what the user has entered and basically do stuff to it -->
    <?php
        Answer: echo $_GET["num1"] + $_GET["num2"]
    ?>
</body>
</html>