<?php 
    $valor = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    echo "Tabuada do ".$valor.":<br>";
    for ($i = 1; $i <= 10; $i++){
        echo $valor." * ".$i." = ".$valor*$i."<br>";
    }