<?php 
    $celsius = isset($_POST['celsius']) ? $_POST['celsius'] : 0;
        $fahrenheit = ($celsius * 9 / 5) + 32;
        echo "A temperatura em Fahrenheit é: ".$fahrenheit;
?>