<?php
    $base = "../";
    $titulo = "Novo Contrato";
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $descricao = trim($_POST['descricao']);
        $tipo = $_POST['tipo'];
        $valor = number_format((float)$_POST['valor'], 2, '.', '');
        require_once("../conexao.php");
        try {
            $sql = "INSERT INTO contratos (descricao, tipo, valor) VALUES (:descricao, :tipo, :valor)";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":descricao", $descricao);
            $resultado->bindParam(":tipo", $tipo);
            $resultado->bindParam(":valor", $valor);
            $resultado->execute();
            $msg = "<div class='alert alert-success'>Inserido com sucesso!</div>";
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao inserir! Confira os dados.</div>";
        }
    }
    include("../includes/topo.php");
?>
            <h1>Novo Contrato</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="descricao" class="form-label">Informe a descrição</label>
                    <input type="text" id="descricao" name="descricao" class="form-control" maxlength="255" required="">
                </div>
                <div class="mb-3">
                    <label for="tipo" class="form-label">Informe o tipo</label>
                    <select id="tipo" name="tipo" class="form-select" required="">
                        <option value="">Selecione...</option>
                        <option value="diaria">Diária</option>
                        <option value="semanal">Semanal</option>
                        <option value="mensal">Mensal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="valor" class="form-label">Informe o valor (R$)</label>
                    <input type="number" id="valor" name="valor" class="form-control" step="0.01" min="0.01" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
