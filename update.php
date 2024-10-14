<?php 


if(isset($_COOKIE['name'])){
    echo "your name set in coockies is : ". $_COOKIE['name']."<br>";
}

if(isset($_POST['update'])){
    $coockies_name='name';
    $cookies_value=$_POST['update'];
    setcookie($coockies_name, $cookies_value, time() + 3600, "/");
    header("Location: ".$_SERVER["REQUEST_URI"]);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5 border border-primary border-3 text-center">
<h3 >Edit the name saved in coockies</h3>
 <form action="" method="post">
    <input type="text" name="update" id="" class="form-control">
    <input type="submit" value="submit" class="btn btn-primary mt-2">
 </form> 
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>