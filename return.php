<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>
<body>
    <?php
        // Return breaks out of function
        function cube($num){
            $number = pow($num, 2);
            return $number;
        }

        echo cube(4)
        
    ?>
</body>
</html>