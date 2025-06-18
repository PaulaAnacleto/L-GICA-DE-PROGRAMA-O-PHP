<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST["nomeProduto"]) && isset($_POST["categoria"]) && isset($_POST["preco"]) && isset($_POST["qtdEstoque"])){
        $nomeProduto = $_POST["nomeProduto"];
        $categoria = $_POST["categoria"];
        $preco = $_POST["preco"];
        $qtdEstoque = $_POST["qtdEstoque"];

        echo "Produto cadastrado com sucesso: <br>";
        echo "Nome: $nomeProduto <br>";
        echo "Categoria: $categoria <br>";
        echo "Preço: R$ $preco <br>";
        echo "Quantidade em Estoque: $qtdEstoque <br>";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
</head>
<body>
    <form method="POST">
        <label for="nomeProduto">
            <p>Nome do Produto</p>
            <input type="nomeProduto" id="nomeProduto" name="nomeProduto" placeholder="Nome do Produto">
        </label>
        
        <label for="categoria">
            <p>Categoria</p>
            <input type="categoria" id="categoria" name="categoria" placeholder="Categoria do Produto">
        </label>
        
        <label for="preco">
            <p>Preço</p>
            <input type="number" id="preco" name="preco" placeholder="R$ 0,00">
        </label>
        
        <label for="qtdEstoque">
            <p>Quantidade em Estoque</p> 
            <input type="qtdEstoque" id="qtdEstoque" name="qtdEstoque" placeholder="Quantidade em Estoque">
        </label>
        <br><br>
        <button type="submit">Cadastrar Produto</button>
    </form>
</body>
</html>