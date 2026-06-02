<?php
// esse arquivo é a página principal do sistema, home
session_start();

//inclui a conexão com o banco de dados , para que possamos usar a variável $conn para fazer consultas e inserções no banco
include("conexao_db.php");

// aqui verificamos se o usuário está logado. Se não estiver, redirecionamos para a página de login (index.php). Exit é usado para o código não executar se não estiver logado. 
if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit();
}

//verifica se o formulário de cadastro de novo usuário foi enviado.
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // aqui pegamos os dados do formulário, o nome do usuário e a senha, e armazenamos em variáveis.
    $usuarioNovo = $_POST["usuario"];
    $senhaNovo = $_POST["senha"];

    //comando SQL para inserir um novo usuário na banco de dados
    $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuarioNovo','$senhaNovo')";


    // Executa a consulta
   if($conn->query($sql) === TRUE){
    //Mensagem de sucesso
    echo "<script> alert('Novo usuário no banco adicionado com sucesso')</script>";
   }else{
    //Mensagem de erro
    echo "<script> alert('Erro ao cadastrar')</script>";

   };



};


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <!-- Exibe o nome do usuário logado -->
    <h1>Bem vindo, <?php echo $_SESSION["usuario"] ?> </h1>

    <!-- Formulário para cadastrar um novo usuário -->
    <form method="POST">

    <label for="usuario">Usuario</label>

        <input type="text" name="usuario">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Cadastrar</button>

    </form>

    <br>
    <br>

    <!-- Aqui inclui a tabela de usuários cadastrados -->
    <?php include("tabela.php"); ?>

    
    <!-- Link para sair do sistema -->
    <a href="logout.php">Sair</a>

    
</body>
</html>