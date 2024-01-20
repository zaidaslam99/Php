<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <form action="associative-arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>
    <?php
        // Associative Array are similar to dictionaries with key and value pairs. 
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        // $grades["Jim"]="F";
        // echo $grades["Jim"];
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>