<?php
    if(!isset($_GET['id'])){
        die("Não é possível abrir o arquivo!");
    }
    $base = "../";
    $titulo = "Dados do Cliente";
    $msg = "";
    $id = (int)$_GET['id'];
    require_once("../conexao.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = trim($_POST['nome']);
        $cpf = trim($_POST['cpf']);
        $telefone = trim($_POST['telefone']);
        $email = trim($_POST['email']);
        if ($email === '') $email = null;
        try {
            $sql = "UPDATE clientes SET nome = :nome, cpf = :cpf, telefone = :telefone, email = :email WHERE id = :id";
            $resultado = $con->prepare($sql);
            $resultado->bindParam(":nome", $nome);
            $resultado->bindParam(":cpf", $cpf);
            $resultado->bindParam(":telefone", $telefone);
            $resultado->bindParam(":email", $email);
            $resultado->bindParam(":id", $id);
            $resultado->execute();
            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            $msg = "<div class='alert alert-danger'>Erro ao alterar! Verifique se o CPF já está cadastrado.</div>";
        }
    }

    $sql = "SELECT * FROM clientes WHERE id = :id";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(':id', $id);
    $resultado->execute();
    $dados = $resultado->fetch(PDO::FETCH_ASSOC);
    if (!$dados){
        die("Registro não encontrado!");
    }
    include("../includes/topo.php");
?>
            <h1>Dados do Cliente</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Informe o nome</label>
                    <input value="<?= h($dados['nome']) ?>" type="text" id="nome" name="nome" class="form-control" maxlength="150" required="">
                </div>
                <div class="mb-3">
                    <label for="cpf" class="form-label">Informe o CPF</label>
                    <input value="<?= h($dados['cpf']) ?>" type="text" id="cpf" name="cpf" class="form-control" maxlength="14" required="">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Informe o telefone</label>
                    <input value="<?= h($dados['telefone']) ?>" type="text" id="telefone" name="telefone" class="form-control" maxlength="20" required="">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Informe o e-mail (opcional)</label>
                    <input value="<?= h($dados['email']) ?>" type="email" id="email" name="email" class="form-control" maxlength="120">
                </div>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <a href="excluir.php?id=<?= (int)$dados['id'] ?>" class="btn btn-danger" data-confirmar="Excluir este cliente?">Excluir</a>
            </form>
            <?= $msg ?>
            <a href="index.php">Voltar</a>
<?php include("../includes/rodape.php"); ?>
