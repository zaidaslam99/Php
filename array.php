<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array-php</title>
</head>
<body>
    <?php
        $friends = array("tom", "jon", "fred", "alex");
        // echo $friends[0];
        $friends[1] = "dwight";
        // echo $friends[1];
        $friends[4] = "Mia";
        // echo $friends[4];
        echo count($friends);

    ?>
</body>
</html>