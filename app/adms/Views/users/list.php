<?php

echo "<h3>Listar Usuários</h3>";

echo "<a href='{$_ENV['URL_ADM']}create-user'>Cadastrar</a><br><br>";

// Acessa o IF quando encontrar o elemento no array users
if (isset($this->data['users'])) {

    // Percorrer o array de usuários
    foreach($this->data['users'] as $user){

        // Extrair o array para imprimir o elemento do array através do nome
        extract($user);

        // Imprimir as informações do registro
        echo "ID: $id<br>";
        echo "Nome: $name<br>";
        echo "E-mail: $email<br>";
        echo "<a href='{$_ENV['URL_ADM']}view-user/$id'>Visualizar</a>";

        echo "<hr>";
    }
} else { // Acessa o ELSE quando não existir registros
    echo "<p style='color: #f00;'>Nenhum usuário encontrado!</p>";
}
