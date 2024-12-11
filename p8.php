<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count visitors</title>
</head>
<body>
    <h1> Welcome to my page </h1>
    <hr>

    <?php
$filename="count.txt";
$fhand=fopen($filename,"r");
$c=fread($fhand,filesize($filename));
fclose($fhand);
$c++;
$fhand=fopen($filename,"w");
fwrite($fhand,$c);
fclose($fhand);
if($c==120){
    echo"wow";
}
?>
<h3>No.of vsitors: <?php echo $c; ?> </h3>
</body>
</html>