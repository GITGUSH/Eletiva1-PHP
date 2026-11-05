<?php
    $base = "../";
    $titulo = "Clientes";
    require_once("../conexao.php");
    $dados = $con->query("SELECT * FROM clientes ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    include("../includes/topo.php");
?>
            <h1>Lista de Clientes</h1>
            <?php
                foreach ($dados as $d){
                    echo "<p>Nome: ".h($d['nome'])." - CPF: ".h($d['cpf'])."
                                <a href='consulta.php?id=".(int)$d['id']."'>Consultar</a></p>";
                }
                if (!$dados) echo "<p>Nenhum cliente cadastrado.</p>";
            ?>
            <a href="cadastro.php" class="btn btn-primary">Novo cliente</a>
<?php include("../includes/rodape.php"); ?>
