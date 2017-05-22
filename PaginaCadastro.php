<html>

<head><title>Pagina De Cadastro</title></head>
<body>

    <form method="post" name="CadastroProduto">
    <h1>Bem Vindo!!</h1>
    <h2>Cadastro de Produto</h2> <br/>
    <label>Marca: </label> <input type="text" name="marca"> <br/>
    <label>Descrição: </label> <input type="text" name="descricao"> <br/>
    <label>Quantidade: </label> <input type="text" name="quantidade"> <br/>
    <label>Preço: </label> <input type="text" name="preco"> <br/>
    <input type="submit" value="Cadastrar">

    </form>

    <?php

    require_once ("Produto.php");

    $produto = new Produto();

    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $produto -> marca = $marca;
    $produto -> descricao = $descricao;
    $produto -> quantidade = $quantidade;
    $produto -> preco = $preco;

    $conexãoBD = new conexãoBD();
    $conexãoBD ->conectar();



    ?>



</body>
</html>
