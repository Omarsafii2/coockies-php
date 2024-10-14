<?php 

if(isset($_GET['card1'])){
  $card1=$_GET['card1'];
  setcookie('card1', $card1, time() + 3600, '/');
}

if(isset($_GET['card2'])){
  $card2=$_GET['card2'];
  setcookie('card2', $card2, time() + 3600, '/');
}

if(isset($_GET['card3'])){  
  $card3=$_GET['card3'];
  setcookie('card3', $card3, time() + 3600, '/');  
}

if(isset($_GET['card4'])){  
  $card4=$_GET['card4'];
  setcookie('card4', $card4, time() + 3600, '/');
}

if(isset($_GET['card5'])){
  $card5=$_GET['card5'];
  setcookie('card5', $card5, time() + 3600, '/');
}

if(isset($_GET['card6'])){  
  $card6=$_GET['card6'];
  setcookie('card6', $card6, time() + 3600, '/');   
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
    <div class="row">
      <div class="col">
        <h1 class="text-center bg-secondary text-light">Welcome in shop</h1>
      </div>
    </div>
    <div class="row">
      <div class="col bg-info text-center ">
       <h2 >card1</h2>
       <input type="hidden" name="" value="card1" id="card1">
       <button id="submit"  class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card1='+document.getElementById('card1').value">Add</button>

      </div>
      <div class="col bg-info ms-2 text-center">
       <h2>card2</h2>
       <input type="hidden" name="" value="card2" id="card2">
       <button id="submit"  class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card2='+document.getElementById('card2').value">Add</button>
      </div>
      <div class="col bg-info ms-2 text-center">
       <h2>card3</h2>
       <input type="hidden" name="" value="card3" id="card3">
       <button id="submit" class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card3='+document.getElementById('card3').value">Add</button>
      </div>
    </div> 

    <div class="row mt-2">
      <div class="col bg-info text-center ">
       <h2>card4</h2>
       <input type="hidden" name="" value="card4" id="card4">
       <button id="submit" class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card4='+document.getElementById('card4').value">Add</button>
      </div>
      <div class="col bg-info ms-2 text-center">
       <h2>card5</h2>
       <input type="hidden" name="" value="card5" id="card5">
       <button id="submit" class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card5='+document.getElementById('card5').value">Add</button>
      </div>
      <div class="col bg-info ms-2 text-center">
       <h2>card6</h2>
       <input type="hidden" name="" value="card6" id="card6">
       <button id="submit" class="btn btn-danger" onclick="javascript:window.location='http://localhost/COOKTASK/shop.php/?card6='+document.getElementById('card6').value">Add</button>
      </div>
    </div> 

    <div class="mt-5 bg-secondary text-center"><h3 class="text-light">here all the card that add to coockies</h3></div>
    <?php var_dump($_COOKIE) ?>
   
  </div>



   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>