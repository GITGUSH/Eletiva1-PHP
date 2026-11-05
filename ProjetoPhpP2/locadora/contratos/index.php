<?php
    $base = "../";
    $titulo = "Contratos";
    require_once("../conexao.php");
    $dados = $con->query("SELECT * FROM contratos ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    include("../includes/topo.php");
?>
            <h1>Lista de Contratos</h1>
            <?php
                foreach ($dados as $d){
                    echo "<p>".h($d['descricao'])." (".h($d['tipo']).") - R$ ".number_format($d['valor'], 2, ',', '.')."
                                <a href='consulta.php?id=".(int)$d['id']."'>Consultar</a></p>";
                }
                if (!$dados) echo "<p>Nenhum contrato cadastrado.</p>";
            ?>
            <a href="cadastro.php" class="btn btn-primary">Novo contrato</a>
<?php include("../includes/rodape.php"); ?>
