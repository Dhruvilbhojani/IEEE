<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin:3px;
        }
        </style>
</head>
<body>
<?php
    $a=fopen("data.txt","w+");
    fwrite($a,$_POST["name"]."<br>");
    fwrite($a,$_POST["mail"]."<br>");
    fclose($a);
?>

    
<?php
echo "Hey ";
echo $_POST["name"];
echo ", You are a genius whose mobile is <h3>Hacked.</h3>
<table border=1>
    <tr>
        <th>Name</th>
        <th>Mail ID</th>
    </tr>
    <tr>
        <td>".$_POST["name"]."</td>
        <td>".$_POST["mail"]."</td>
    </tr>
</table>"
?>

</body>
</html>