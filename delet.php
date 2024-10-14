<?php 
if(isset($_COOKIE['name'])){
  echo "your name set in coockies is : ". $_COOKIE['name']."<br>";
  echo "this name will delet from coockies in 10 seconds";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    setcookie('name', $_POST['name'], time() + 10, "/");
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
  <input type="text" name="name">
  <input type="submit" name="submit">
</form>
      
</body>
</html>