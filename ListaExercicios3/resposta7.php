<?php 
    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : "";

    echo "Palavra invertida: ".strrev($palavra);
