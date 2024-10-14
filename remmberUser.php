
    <?php
    if(isset($_POST['username']) && !empty($_POST['username'])){
    $cookie_value=$_POST['username'];
    setcookie('username',$cookie_value, time() + 3600, '/');
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

    <?php
    if(isset($cookie_value)&& !empty($cookie_value)) {
        echo "user is :".$cookie_value;
    } else {
        echo "Cookies are not set";
    }
    ?>
        <div class="container">
            <div class="bg-secondary p-4">this simple form</div>
        <form  action=<?php echo $_SERVER['PHP_SELF'] ?> method='post' >

        <div>
            <label for="" >username</label>
            <input type="text" name="username" id="" class="form-control">
        </div>

        <button type="submit" name="sub_btn" class="btn btn-primary mt-2">submit</button>

        </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
    </html>



    

