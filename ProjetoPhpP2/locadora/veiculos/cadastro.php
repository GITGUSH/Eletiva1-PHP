<?php
    $base = "../";
    $titulo = "Novo Veículo";
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $placa = strtoupper(trim($_POST['placa']));
        $marca = trim($_POST['marca']);
        $modelo = trim($_POST['modelo']);
        $ano = (int)$_POST['ano'];
        $cor = trim($_POST['cor']);
        require_once("../conexao.php");
        try {
            $sql = "INSERT INTO veiculos (placa, marca, modelo, ano, cor) VALUES (:placa, :marca, :modelo, :ano, :cor)";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":placa", $placa);
            $resultado->bindParam(":marca", $marca);
            $resultado->bindParam(":modelo", $modelo);
            $resultado->bindParam(":ano", $ano);
            $resultado->bindParam(":cor", $cor);
            $resultado->execute();
            $msg = "<div class='alert alert-success'>Inserido com sucesso!</div>";
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao inserir! Verifique se a placa já está cadastrada.</div>";
        }
    }
    include("../includes/topo.php");
?>
            <h1>Novo Veículo</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="placa" class="form-label">Informe a placa</label>
                    <input type="text" id="placa" name="placa" class="form-control" maxlength="7" required="">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Informe a marca</label>
                    <input type="text" id="marca" name="marca" class="form-control" maxlength="50" required="">
                </div>
                <div class="mb-3">
                    <label for="modelo" class="form-label">Informe o modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" maxlength="80" required="">
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label">Informe o ano</label>
                    <input type="number" id="ano" name="ano" class="form-control" min="1950" max="2100" required="">
                </div>
                <div class="mb-3">
                    <label for="cor" class="form-label">Informe a cor</label>
                    <input type="text" id="cor" name="cor" class="form-control" maxlength="30" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
