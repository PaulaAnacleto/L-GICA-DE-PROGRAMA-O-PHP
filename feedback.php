<?php
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST["nomeCliente"]) && isset($_POST["produto"]) && isset($_POST["avaliacao"]) && isset($_POST["comentario"])){
            $nomeCliente = $_POST["nomeCliente"];
            $produto = $_POST["produto"];
            $avaliacao = $_POST["avaliacao"];
            $comentario = $_POST["comentario"];

            echo "Compra registrada com sucesso: <br>";
            echo "Nome do Cliente: $nomeCliente <br>";
            echo "Produto: $produto <br>";
            echo "Avaliação: $avaliacao estrelas <br>";
            echo "Comentário: $comentario <br>";
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
    <title>Compras</title>
</head>
<body>
    <form method="POST">
        <label for="nomeCliente">
            <p>Nome do Cliente</p>
            <input type="nomeCliente" id="nomeCliente" name="nomeCliente" placeholder="Nome do Cliente">
        </label>
        
        <label for="produto">
            <p>Escolha um produto:</p>
            <select id="produto" name="produto">
            <option value="camera">Câmera</option>
            <option value="bola">Bola</option>
            <option value="xicara">Xícara</option>
            <option value="tablet">Tablet</option>
            </select>
        </label>
        
        <label for="avaliacao">
            <p>Avaliação</p>
            <input type="checkbox" id="avaliacao" name="avaliacao" value="1">★ 
            <input type="checkbox" id="avaliacao" name="avaliacao" value="2">★ 
            <input type="checkbox" id="avaliacao" name="avaliacao" value="3">★ 
            <input type="checkbox" id="avaliacao" name="avaliacao" value="4">★
            <input type="checkbox" id="avaliacao" name="avaliacao" value="5">★ 
        </label>
        
        <label for="comentario">
            <p>Comentários</p> 
            <textarea name="comentario" id="comentario"></textarea>
        </label>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


