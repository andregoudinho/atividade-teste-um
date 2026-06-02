<?php

// Inicia a sessão para poder executá-la
session_start();
// Encerra a sessão
// Remove os dados armazenados da sessão
session_destroy();

// Redireciona o usuário para a tela de login
header("Location:index.php");
// Exit impede que o restante do código seja executado após o redirecionamento
exit();

?>