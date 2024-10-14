<?php 
   

  
if(isset($_COOKIE['background']) ){
    echo "<style>body {background-color: ".$_COOKIE['background']."}</style>";
}   
if($_SERVER['REQUEST_METHOD']=='POST'){
    setcookie('background', $_POST['bg-color'], time() +8600, "/");
    header("Location: ".$_SERVER["REQUEST_URI"]);
    exit();
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
    <form action="" method="POST">
        <input type="color" name="bg-color">
        <input type="submit" name="choose color" id="">

    
   </form>

</body>
</html>