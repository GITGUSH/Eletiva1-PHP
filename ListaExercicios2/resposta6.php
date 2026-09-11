<?php 
    $valor = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $i = 1;
    $soma = 0;
    $strSoma = "";
    while ($i <= $valor){
        $soma += $i;
        if ($i < $valor){
        $strSoma.=$i." + ";}
        else $strSoma.=$i;
        $i++;
    }
    echo $strSoma ."<br>";
    echo "O resultado da soma é: ".$soma;