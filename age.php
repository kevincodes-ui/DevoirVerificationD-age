<?php
$val = 30;

// verifier si c'est un enfant,mineur,majeure,age

if($val>= 3 && $val <= 12){
    echo "C'est une personne enfant";
}
if($val >= 13 && $val <= 17){
    echo "<b>C'est une personne mineur</b>";
}
if($val >= 18 && $val <= 54 ){
    echo "<b>C'est une personne majeur</b>";
}
if($val >= 55){
    echo "<b>C'est une personne age</b>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>