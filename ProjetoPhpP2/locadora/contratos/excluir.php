<?php

    require_once("../conexao.php");
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM contratos WHERE id = :id";
    $resultado = $con->prepare($sql);
    $resultado->bindParam(":id", $id);
    $resultado->execute();
    header("Location: index.php");
