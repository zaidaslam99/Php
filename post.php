<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- password is being mutated in our URL parameters -->
    <!-- <form action="post.php" method="get">
        Password: <input type="password" name="password">
        <input type="submit">
    </form> -->
    <!-- Using the POST method -->
    <!-- password will not be mutated in url -->
    <form action="post.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <br><br>
    <?php
        // For GET METHOD
        // echo $_GET["password"];
        // For POST METHODf
        echo $_POST["password"];
    ?>
</body>
</html>