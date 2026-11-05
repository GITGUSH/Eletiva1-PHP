<?php
    $base = "../";
    $titulo = "Novo Cliente";
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = trim($_POST['nome']);
        $cpf = trim($_POST['cpf']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        if ($email === '') $email = null;
        require_once("../conexao.php");
        try {
            $sql = "INSERT INTO clientes (nome, cpf, telefone, email) VALUES (:nome, :cpf, :telefone, :email)";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":nome", $nome);
            $resultado->bindParam(":cpf", $cpf);
            $resultado->bindParam(":telefone", $telefone);
            $resultado->bindParam(":email", $email);
            $resultado->execute();
            $msg = "<div class='alert alert-success'>Inserido com sucesso!</div>";
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao inserir! Verifique se o CPF já está cadastrado.</div>";
        }
    }
    include("../includes/topo.php");
?>
            <h1>Novo Cliente</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Informe o nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" maxlength="150" required="">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">Informe o CPF</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" maxlength="14" required="">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Informe o telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" maxlength="20" required="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Informe o e-mail (opcional)</label>
                    <input type="email" id="email" name="email" class="form-control" maxlength="120">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
