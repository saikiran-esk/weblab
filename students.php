<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selection sort</title>
    <style>
        table, th,td {border:1pt solid black}
    </style>
</head>
<body>
    <h1>Selection sort</h1>
    <?php
    define('HOST','localhost');
    define('USER','root');
    define('PSWD','');
    define('DB_NAME','studentdb');
    $con =mysqli_connect(HOST,USER,PSWD,DB_NAME);
    if(mysqli_connect_errno())
    echo "Error in connection ".mysqli_connect_error();
else
echo "Sucessfully connected";
$query = mysqli_query($con,"select * from student");
$data = mysqli_fetch_all($query,MYSQLI_ASSOC);


?>
<h2>Before Sorting</h2>
<table>
<tr><th> ID</th> <th> USN </th>
<th>Name </th><th> Dept </th>
</tr>
<?php
for($i=0;$i<sizeof($data);$i++){
    ?>
    <tr>
        <td><?php echo $i+1;   ?></td>
        <td><?php echo $data[$i]["usn"];   ?></td>
        <td><?php echo $data[$i]["sname"];  ?></td>
        <td><?php echo $data[$i]["dept"];   ?></td>
</tr>
<?php

}
?>
</table>
<?php
for($i=0; $i<sizeof($data);$i++){
    $minusn=$i;
    for($j=$i+1;$j<sizeof($data);$j++){
        if($data[$j]["usn"]<$data[$minusn]["usn"]){
            $minusn=$j;
        }
    }
    $temp=$data[$i];
    $data[$i]=$data[$minusn];
    $data[$minusn]=$temp;

}
?>
<h2>After sorting </h2>
<table>
<tr><th> ID</th> <th> USN </th>
<th>Name </th><th> Dept </th>
</tr>
<?php
for($i=0;$i<sizeof($data);$i++){
    ?>
    <tr>
        <td><?php echo $i+1;   ?></td>
        <td><?php echo $data[$i]["usn"];   ?></td>
        <td><?php echo $data[$i]["sname"];  ?></td>
        <td><?php echo $data[$i]["dept"];   ?></td>
</tr>
<?php

}
?>
</table>
</body>
</html>