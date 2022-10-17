<?php
    $base=isset($_POST['base'])? $_POST['base']: null;
    $altura=isset($_POST['altura'])? $_POST['altura']: null;
    CalcularRectagulo($base,$altura);
    CalcularCuadrado($base);
    CalcularRectagulo($base,$altura);
    CalcularRectagulo($base,$altura);
    PintarNombre('Pedro');
    PintarNombre('Maria');
    PintarWhile('Carlos',5);

    function CalcularRectagulo($b,$a){
        $area=$b*$a;
        echo 'El area rectangulo es: '.$area;
        echo '<br>';
    }
    function CalcularCuadrado($b){
        $area=$b*$b;
        echo 'El area del cuadrado es: '.$area;
        echo '<br>';
    }
    function PintarNombre($nombre){
        for ($i=0; $i <10 ; $i++) { 
            echo $nombre.'<br>';
        }
    }
    function PintarWhile($nombre,$cantidad){
        $a=1;
        while ($a <= $cantidad) {
            echo $nombre.'<br>';
            $a++;
        }
    }
?>