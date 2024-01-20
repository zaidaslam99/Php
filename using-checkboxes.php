<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Check Boxes</title>
</head>
<body>
    <form action="using-checkboxes.php" method="post">
    <!-- Value is going to be check box associated with -->
    <!-- fruits is going to be acting as an array that is going to be holding list -->
    <!-- If we wanted user to store into same array we gave same value to name -->
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>    
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>    
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>    
    <input type="submit">
    </form>
    
    <!-- We are getting two different response and storing them to array -->
    <!-- We saved array to variable and printed out the first index -->
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>
</body>
</html>