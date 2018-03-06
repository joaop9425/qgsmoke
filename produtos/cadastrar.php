<?php 

include("../conexao.php");

$bd = "produtos";

$produto    = trim($_POST['produto']);
$marca      = trim($_POST['marca']);
$sabor      = trim($_POST['sabor']);
$peso       = trim($_POST['peso']);
$quantidade = trim($_POST['quantidade']);

if (array_key_exists("submit", $_POST)){    // Entra se "submit" existe

    if (empty($_POST['produto']) || empty($_POST['marca']) || empty($_POST['quantidade'])){
        echo "<script>alert('Preencha os campos Obrigatórios')</script>";
    } else {
        $insertSql = "INSERT INTO $bd (produto, marca, sabor, peso, quantidade) VALUES ('$produto', '$marca', '$sabor', '$peso', '$quantidade')";
        mysql_select_db($database_localhost, $localhost);
        $Result1 = mysql_query($insertSql, $localhost) or die(mysql_error());
    }
}

 ?>

<h1>Cadastro de Produtos</h1>

<form action="cadastrar.php" method="POST">
    <div>
        <div>Nome: *</div>
        <input type="text" name="produto" id="produto">
    </div>
    <div>
        <div>Marca: *</div>
        <input type="text" name="marca" id="marca">
    </div>
    <div>
        <div>Sabor: </div>
        <input type="text" name="sabor" id="sabor">
    </div>
    <div>
        <div>Peso: </div>
        <input type="text" name="peso" id="peso">
    </div>
    <div>
        <div>Quantidade: *</div>
        <input type="text" name="quantidade" id="quantidade">
    </div>
    <div><input type="submit" name="submit" value="Enviar"></div>
</form>