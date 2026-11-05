<?php
    if(!isset($_GET['id'])){
        die("Não é possível abrir o arquivo!");
    }
    $base = "../";
    $titulo = "Dados do Contrato";
    $msg = "";
    $id = (int)$_GET['id'];
    require_once("../conexao.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $descricao = trim($_POST['descricao']);
        $tipo = $_POST['tipo'];
        $valor = number_format((float)$_POST['valor'], 2, '.', '');
        try {
            $sql = "UPDATE contratos SET descricao = :descricao, tipo = :tipo, valor = :valor WHERE id = :id";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":descricao", $descricao);
            $resultado->bindParam(":tipo", $tipo);
            $resultado->bindParam(":valor", $valor);
            $resultado->bindParam(":id", $id);
            $resultado->execute();
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao alterar! Confira os dados.</div>";
        }
    }

    $sql = "SELECT * FROM contratos WHERE id = :id";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(':id', $id);
    $resultado->execute();
    $dados = $resultado->fetch(PDO::FETCH_ASSOC);
    if (!$dados){
        die("Registro não encontrado!");
    }
    include("../includes/topo.php");
?>
            <h1>Dados do Contrato</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="descricao" class="form-label">Informe a descrição</label>
                    <input value="<?= h($dados['descricao']) ?>" type="text" id="descricao" name="descricao" class="form-control" maxlength="255" required="">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Informe o tipo</label>
                    <select id="tipo" name="tipo" class="form-select" required="">
                        <option value="diaria" <?= $dados['tipo'] == 'diaria' ? 'selected' : '' ?>>Diária</option>
                        <option value="semanal" <?= $dados['tipo'] == 'semanal' ? 'selected' : '' ?>>Semanal</option>
                        <option value="mensal" <?= $dados['tipo'] == 'mensal' ? 'selected' : '' ?>>Mensal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="valor" class="form-label">Informe o valor (R$)</label>
                    <input value="<?= h($dados['valor']) ?>" type="number" id="valor" name="valor" class="form-control" step="0.01" min="0.01" required="">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluir.php?id=<?= (int)$dados['id'] ?>" class="btn btn-danger" data-confirmar="Excluir este contrato?">Excluir</a>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
