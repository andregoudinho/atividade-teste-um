<hr>
<!-- esse arquivo é responsável por exibir os usuários cadastrados no banco de dados -->

<!-- Define o titulo da página -->

<h2>Usuários Cadastrados</h2>

<!-- Criei uma tabela para exibir os dados dos usuários -->
<table border=1 cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
        // Consulta SQL para buscar todos os usuários cadastrados no banco de dados
        $sqlUsuarios = "SELECT * FROM usuario";

        // Executa a consulta no banco de dados e armazena o resultado em uma variável
        $resultadoUsuarios = $conn->query($sqlUsuarios);

        // Percorre os resultados da consulta e exibe cada usuário na tabela
        while($linha = $resultadoUsuarios->fetch_assoc()){
            echo "
            
            <tr>
                <td>".$linha["id"]."</td>
                <td>".$linha["usuario"]."</td>
                <td>".$linha["senha"]."</td>
            </tr>
            
            ";
        }
    
    ?>


</table>