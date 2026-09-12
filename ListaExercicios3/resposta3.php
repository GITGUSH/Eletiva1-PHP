<?php 
    $palavra1 = isset($_POST['palavra1']) ? $_POST['palavra1'] : "";
    $palavra2 = isset($_POST['palavra2']) ? $_POST['palavra2'] : "";

    if (strpos($palavra1, $palavra2) !== false){
        echo "A palavra ".$palavra2." está contida em ".$palavra1.".";
    }
    else echo "A palavra ".$palavra2." não está contida em ".$palavra1.".";
