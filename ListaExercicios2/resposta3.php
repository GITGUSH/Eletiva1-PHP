<?php 
    $prod = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    if ($prod > 100){
        $desc = 0.15 * $prod;
        echo "O novo valor após o desconto é: R$". number_format($prod - $desc, 2, ',', '.');
    }
    else echo "O valor do produto é: R$". number_format($prod, 2, ',', '.');