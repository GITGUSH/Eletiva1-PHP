<?php 
    $dia = isset($_POST['dia']) ? (int)$_POST['dia'] : 0;
    $mes = isset($_POST['mes']) ? (int)$_POST['mes'] : 0;
    $ano = isset($_POST['ano']) ? (int)$_POST['ano'] : 0;

    if (checkdate($mes, $dia, $ano)){
        $data = sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
        echo "Data válida: ".$data;
    }
    else echo "Data inválida.";
