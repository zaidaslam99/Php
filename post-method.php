<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-Method</title>
</head>
<body>
    <form action="post-method" method="post">
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <br><br>
    <?php
        echo $_GET["password"];
    ?>
</body>
</html>