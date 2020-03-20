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
        </div>
    </form>
</div>
</div>
<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $pdo->query($sql);

    header("Location: index.php");

} else {
}
?>