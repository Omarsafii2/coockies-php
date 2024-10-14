<?php

$coockies_name='message';
$cookies_value='hello from page one';  
setcookie($coockies_name, $cookies_value, time() + 3600 , "/");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>hello in pgae 1 ,,,, here we will set coockies and sent to page2</h3>

<a href="page2.php">press to see the value of coockies</a>
    
</body>
</html>