<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "Sistema_simples";

$conn = new mysqli($host, $user, $pass, $db); 

if ($conn->connect_error) {
    die("Erro na conexão!");
}else{
    // echo "<p> (Banco Ok!) </p>";
    echo "<script> console.log('Banco: Ok!') </script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Banco</title>
</head>
<body>
    <h2>
        Login com PHP
    </h2>

    <form method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Entrar</button>
     </form>

</body>
</html>