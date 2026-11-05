<?php
    $base = "../";
    $titulo = "Veículos";
    require_once("../conexao.php");
    $dados = $con->query("SELECT * FROM veiculos ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    include("../includes/topo.php");
?>
            <h1>Lista de Veículos</h1>
            <?php
                foreach ($dados as $d){
                    echo "<p>Placa: ".h($d['placa'])." - ".h($d['marca'])." ".h($d['modelo'])."
                                <a href='consulta.php?id=".(int)$d['id']."'>Consultar</a></p>";
                }
                if (!$dados) echo "<p>Nenhum veículo cadastrado.</p>";
            ?>
            <a href="cadastro.php" class="btn btn-primary">Novo veículo</a>
<?php include("../includes/rodape.php"); ?>
