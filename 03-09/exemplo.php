<?php

if (isset($_GET['aleatorio'])) {
    echo random_int(1, 100);
    exit;
}

if (isset($_GET['data'])) {
    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i:s');
    exit;
}

date_default_timezone_set('America/Sao_Paulo');

?>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exemplo de funções em PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container py-3">
<h1>Exemplo de funções em PHP</h1>
<form method="post" action="exemplo.php">
<div class="mb-3">
              <label for="nome" class="form-label">Informe o seu nome</label>
              <input type="text" id="nome" name="nome" class="form-control" required="">
            </div><div class="mb-3">
              <label for="idade" class="form-label">Informe a sua idade</label>
              <input type="number" id="idade" name="idade" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
 
<?php
    date_default_timezone_set('America/Sao_Paulo');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'] ?? "";
        $idade = $_POST['idade'] ?? 0;
        if($nome != "" && $idade > 0){
           $qtd = strlen($nome);
           echo "<p>Olá, $nome! Você tem $idade anos e seu nome tem $qtd letras.</p>";
           echo "<p>Seu nome em maiúsculas é: ".strtoupper($nome)."</p>";
           echo "<p>Seu nome em minúsculas é: ".strtolower($nome)."</p>";
           echo "<p>Substituindo a letra 'a' por 'A': ".str_replace('a', 'A', $nome)."</p>";
           echo "<p id='data'> O dia de hoje é: ".date('d/m/Y H:i:s')."</p>";
           echo "<p> O quadrado da sua idade é: ".pow($idade, 2)."</p>";
           echo "<p id='numero'>Número aleatório entre 1 e 100: ".random_int(1, 100)."</p>";        
        }

    }
?>
<script>
setInterval(function() {

    fetch('exemplo.php?aleatorio=1')
        .then(response => response.text())
        .then(numero => {
            document.getElementById('numero').innerHTML =
                'Número aleatório entre 1 e 100: ' + numero;
        });

    fetch('exemplo.php?data=1')
        .then(response => response.text())
        .then(data => {
            document.getElementById('data').innerHTML =
                'O dia de hoje é: ' + data;
        });

}, 1000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
 