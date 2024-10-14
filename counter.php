<?php

$coockies_count=1;
if(isset($_COOKIE['coockies_count'])){
    $coockies_count=$_COOKIE['coockies_count']; 
}
else{
    $coockies_count=0;
}
$coockies_count++;
setcookie('coockies_count',$coockies_count, time()+5,"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>count: <?= $coockies_count; ?></h1>
    
</body>
</html>