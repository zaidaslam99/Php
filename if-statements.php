<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Statements</title>
</head>
<body>
    <?php
        $isMale = false;
        $isTall = false;

        // and - if else statements
        if ($isMale && $isTall){
            echo "You are male and you are tall";
        } elseif ($isMale && !$isTall){
            echo "You are a short male";
        } elseif (!$isMale && $isTall) {
            echo "You are not male but are tall";
        } else {
            echo "You are not male and not tall";
        }

        // if ($isMale || $isTall){
        //     echo "You are either male or you are either tall";
        // } else {
        //     echo "You are both tall and male";
        // }

    ?>
</body>
</html>