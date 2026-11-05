<?php
    $base = "";
    $titulo = "Locadora";
    include("includes/topo.php");
?>
            <h1>Sistema de Locadora de Veículos</h1>
            <p>Escolha o cadastro que deseja gerenciar:</p>
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="veiculos/index.php" class="btn btn-primary w-100 py-4">Veículos</a>
                </div>
                <div class="col-md-4">
                    <a href="clientes/index.php" class="btn btn-primary w-100 py-4">Clientes</a>
                </div>
                <div class="col-md-4">
                    <a href="contratos/index.php" class="btn btn-primary w-100 py-4">Contratos</a>
                </div>
            </div>
<?php include("includes/rodape.php"); ?>
