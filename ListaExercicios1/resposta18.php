<?php 
    $dias = isset($_POST['dias']) ? $_POST['dias'] : 0;
        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;
        echo "Horas: ".$horas."<br>Minutos: ".$minutos."<br>Segundos: ".$segundos;
?>