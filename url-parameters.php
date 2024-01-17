<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="url-parameters.php" method="get">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        // http://localhost:3000/Website-1/url-parameters.php?name=Zaid&age=70
        // after ? here we can store variable to add more variables use &
        echo $_GET["name"];
        echo $_GET["age"];
    ?>
</body>
</html>