<?php 
    $valor = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $fat = 1;
    $strFat = $valor."! = ";
    for ($i = $valor; $i >= 1; $i--){
        $fat *= $i;
        if ($i > 1){
        $strFat.=$i." * ";}
        else $strFat.=$i;
    }
    echo $strFat."<br>";
    echo "O fatorial de ".$valor." é: ". $fat;