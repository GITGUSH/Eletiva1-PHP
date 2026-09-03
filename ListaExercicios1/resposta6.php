<?php 
    $fahrenheit = isset($_POST['fahrenheit']) ? $_POST['fahrenheit'] : 0;
        $celsius = ($fahrenheit - 32) * 5 / 9;
        echo "A temperatura em Celsius é: ".$celsius;
?>