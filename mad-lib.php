<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- using input tag we can access information using attribute variable store data and recall it in php -->
    <form action="mad-lib.php" method="get">
    Color: <br><input type="text" name="color"> <br>
    Plural Noun: <br><input type="text" name="pluralNoun"> <br>
    Something: <br><input type="text" name="something"> <br><br>
    <input type="submit">
    </form>
    <br><br>
    <?php
        // Storing information to variable using $GET['variable']
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $something = $_GET["something"];

        // Displaying information from variable
        echo "Roses are red $color <br>"; 
        echo "$pluralNoun are blue <br>"; 
        echo "I love $something <br>"; 
    ?>
</body>
</html>