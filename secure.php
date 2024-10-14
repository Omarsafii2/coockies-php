<?php
$coockies_name='name';
$cookies_value='ali';

setcookie($coockies_name, $cookies_value, time() + 3600,$secure=true, $httponly=true);

if(isset($_COOKIE[$coockies_name])){
    echo "your name set in coockies is : ". $_COOKIE[$coockies_name]."<br>";

}else{  
    echo "your name not set in coockies<br>";
    echo " the name not set in coockies becuse the connection not secure";
}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h3>Secure connection over https </h3>
    
 </body>
 </html>