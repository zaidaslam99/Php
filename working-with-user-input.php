<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action -> refers to php file working with-->
    <!-- get -> storing information not secure-->
    <!-- name -> act as variable to store text keyword -->
    <!-- type -> sets what html form type we working with -->
    <form action="working-with-user-input.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    <br>
    <!-- Here we are passing information to server and retrieving using $_GET["variable"] and printing it -->
    Your name is: <?php echo $_GET["name"] ?>
    <br>
    Your age is: <?php echo $_GET["age"] ?>
</body>
</html>