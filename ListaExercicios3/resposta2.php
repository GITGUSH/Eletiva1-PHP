<?php 
    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : "";

    echo "Maiúsculo: ".strtoupper($palavra)."<br>";
    echo "Minúsculo: ".strtolower($palavra);
