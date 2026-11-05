<?php
    if(!isset($_GET['id'])){
        die("Não é possível abrir o arquivo!");
    }
    $base = "../";
    $titulo = "Dados do Veículo";
    $msg = "";
    $id = (int)$_GET['id'];
    require_once("../conexao.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $placa = strtoupper(trim($_POST['placa']));
        $marca = trim($_POST['marca']);
        $modelo = trim($_POST['modelo']);
        $ano = (int)$_POST['ano'];
        $cor = trim($_POST['cor']);
        try {
            $sql = "UPDATE veiculos SET placa = :placa, marca = :marca, modelo = :modelo, ano = :ano, cor = :cor WHERE id = :id";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":placa", $placa);
            $resultado->bindParam(":marca", $marca);
            $resultado->bindParam(":modelo", $modelo);
            $resultado->bindParam(":ano", $ano);
            $resultado->bindParam(":cor", $cor);
            $resultado->bindParam(":id", $id);
            $resultado->execute();
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao alterar! Verifique se a placa já está cadastrada.</div>";
        }
    }

    $sql = "SELECT * FROM veiculos WHERE id = :id";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(':id', $id);
    $resultado->execute();
    $dados = $resultado->fetch(PDO::FETCH_ASSOC);
    if (!$dados){
        die("Registro não encontrado!");
    }
    include("../includes/topo.php");
?>
            <h1>Dados do Veículo</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="placa" class="form-label">Informe a placa</label>
                    <input value="<?= h($dados['placa']) ?>" type="text" id="placa" name="placa" class="form-control" maxlength="7" required="">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Informe a marca</label>
                    <input value="<?= h($dados['marca']) ?>" type="text" id="marca" name="marca" class="form-control" maxlength="50" required="">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Informe o modelo</label>
                    <input value="<?= h($dados['modelo']) ?>" type="text" id="modelo" name="modelo" class="form-control" maxlength="80" required="">
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label">Informe o ano</label>
                    <input value="<?= h($dados['ano']) ?>" type="number" id="ano" name="ano" class="form-control" min="1950" max="2100" required="">
                </div>
                <div class="mb-3">
                    <label for="cor" class="form-label">Informe a cor</label>
                    <input value="<?= h($dados['cor']) ?>" type="text" id="cor" name="cor" class="form-control" maxlength="30" required="">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluir.php?id=<?= (int)$dados['id'] ?>" class="btn btn-danger" data-confirmar="Excluir este veículo?">Excluir</a>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
