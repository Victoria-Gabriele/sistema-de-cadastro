<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro e consulta de produtos.</title>
</head>
<body>
    
    <form action="catalogo.php" method="post">
        
    <h1>Cadastrar Novo Produto</h1>

    Nome do produto <br>
    <input type="text" id="nome" >
    <br>

    Descrição: <br>
    <input type="text" id="descriçao">
    <br>

    Preço: <br>
    <input type="text" id="preço">
    <br>

    Quantidade: <br>
    <input type="text" id="quantidade">
    <br><br>

    <input type="submit" value="enviar">

</form>
</body>
</html>