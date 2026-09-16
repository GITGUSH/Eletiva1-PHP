<?php 
    $frase = isset($_POST['frase']) ? $_POST['frase'] : "";

    $semEspacosExtras = trim($frase);
    $semEspacos = str_replace(" ", "", $frase);

    echo "Frase original: '".$frase."'<br>";
    echo "Sem espaços no início/fim: '".$semEspacosExtras."'<br>";
    echo "Sem nenhum espaço: '".$semEspacos."'";
