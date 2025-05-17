<?php

echo "<h3>Cadastrar Usuário</h3>";

echo "<a href='{$_ENV['URL_ADM']}list-users'>Listar</a><br><br>";

?>

<form action="" method="POST">

    <label for="name">Nome: </label>
    <input type="text" name="name" id="name" placeholder="Nome completo"><br><br>

    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" placeholder="Melhor e-mail"><br><br>

    <label for="password">Senha: </label>
    <input type="password" name="password" id="password" placeholder="Senha com mínimo 6 caracteres"><br><br>

    <button type="submit">Cadastrar</button>

</form>