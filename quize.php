<?php 
$coockies_count="counter";
$coockies_value="0";
setcookie($coockies_count,$cookies_value, time() + 60*60*24*30*12, "/");
if(isset($_POST['submit'])){

    if($_POST['20']==20){
        $cookies_count++;
    }

    if($_POST['4']==4){
        $cookies_count++;
    }
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
<div class="container">
<h3>quize </h3>

<form action=" " method="POST">
 <label for="">Q1:  10*2=</label> 
 <br> 
 <input type="radio" name="mult" value="20">20
 <br>
 <input type="radio" name="mult" value="10">10
 <br>
 <input type="radio" name="mult" value="5">5

 <br>
 
 <label for="">Q2:  2*2=</label> 
 <br> 
 <input type="radio" name="mult1" value="54">54
 <br>
 <input type="radio" name="mult1" value="34 ">34
 <br>
 <input type="radio" name="mult1" value="4">4
<br>
 <button type="submit" name="submit" class="btn btn-primary">submit</button>




</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>