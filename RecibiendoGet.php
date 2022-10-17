<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>recibiendo Get</title>
</head>
<body>
    <h1>Recibiendo Get</h1>
    <div class="container">
         <?php
            $correo=isset($_GET['correo'])? $_GET['correo']:null;
            $password=isset($_GET['password'])? $_GET['password']:null;
            echo '<p>Tu correo es: </p>'.$correo;
            echo '<p>Tu password es: </p>'.$password;
         ?>
    </div>
</body>
</html>