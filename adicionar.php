<?php
require "config.php";
require "head.php";
?>
<div class="container">
<div class="form">
    <h1>Formulário de Registro</h1>
    <form method="POST">
        <div class="form-group">
        Nome</br>
        <input class="form-control" type="text" name="nome"></br>
        E-mail</br>
        <input class="form-control" type="email" name="email"></br>
        Senha</br>
        <input class="form-control" type="password" name="senha"></br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button class="btn btn-primary"><a href="index.php">Início</a></button>
        </div>
    </form>
<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    if(isset($_POST['senha']) && !empty($_POST['senha'])) {
        $nome = addslashes($_POST['nome']);
        $email = filter_var(addslashes($_POST['email']), FILTER_VALIDATE_EMAIL);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $pdo->query($sql);

        echo "<h2>Usuário Adicionado</h2>";

        header("Refresh:2.5; url=index.php");
    }
} else {
}
?>
</div>
</div>