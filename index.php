<html>
<head>

    <meta charset="utf-8">
   <title>Página Inicial</title>

</head>

<body>
<form method="post" name="login">
<input type="text" name = "usuario">
<input type="password" name = "senha">
<input type="submit" value="Entrar">
</form>
<?php

require_once 'Usuario.php';

$user = new Usuario;
$login = $_POST['usuario'];
$senha = $_POST['senha'];
$user ->login = $login;
$user ->senha = $senha;
$user ->testa();

?>

</body>
</html>
