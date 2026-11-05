<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titulo ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark mb-3">
            <div class="container">
                <a class="navbar-brand" href="<?= $base ?>index.php">Locadora</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= $base ?>veiculos/index.php">Veículos</a>
                    <a class="nav-link" href="<?= $base ?>clientes/index.php">Clientes</a>
                    <a class="nav-link" href="<?= $base ?>contratos/index.php">Contratos</a>
                </div>
            </div>
        </nav>
        <div class="container py-3">
