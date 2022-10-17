<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
    echo '<h1>Resultados</h1>';
    $valor1=$_POST['numero1'];
    $valor2=$_POST['numero2'];
    $operador=$_POST['operador'];
    if($operador=='+'){
        $suma=$valor1+$valor2;
        echo $suma;
    }
    else if($operador=='-'){
        $resta=$valor1-$valor2;
        echo $resta;
    }
    else if($operador=='*'){
        $multiplica=$valor1*$valor2;
        echo $multiplica;
    }
    else if($operador=='/'){
        $divide=$valor1/$valor2;
        echo $divide;
    }
    else{
        echo 'No se seleccionó tipo de operación';
    }
    
?>
</body>
</html>
