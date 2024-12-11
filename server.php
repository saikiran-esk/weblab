<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server info</title>
</head>
<body>
    <h1>Server info</h1>
    <?php
echo "<h3>". $_SERVER['PHP_SELF']."</h3>";
echo "<h3>". $_SERVER['SERVER_NAME']."</h3>";
echo "<h3>". $_SERVER['HTTP_HOST']."</h3>";
echo "<h3>". $_SERVER['HTTP_REFERER']."</h3>";
echo "<h3>". $_SERVER['HTTP_USER_AGENT']."</h3>";
echo "<h3>". $_SERVER['SCRIPT_NAME']."</h3>";
?>
</body>
</html>