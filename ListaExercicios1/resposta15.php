<?php 
    $preco = isset($_POST['preco']) ? $_POST['preco'] : 0;
        $desconto = isset($_POST['desconto']) ? $_POST['desconto'] : 0;
        $valorDesconto = $preco * ($desconto / 100);
        $precoFinal = $preco - $valorDesconto;
        echo "O preço com desconto é: ".$precoFinal;
?>