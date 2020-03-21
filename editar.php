<?php
require "config.php";
require "head.php";

$id = 0;

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
}

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
    $pdo->query($sql);
    header("Location:index.php");
    } else {
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0) {
            $dados = $sql->fetch();
        }
}
?>
<div class="container">
<div class="form">
    <h1>Atualizar Usuário</h1>
    <form method="POST">
        <div class="form-group">
        Nome</br>
        <input class="form-control" type="text" name="nome" value="<?php echo $dados['nome'] ?>"></br>
        E-mail</br>
        <input class="form-control" type="email" name="email" value="<?php echo $dados['email'] ?>"></br>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <button class="btn btn-primary"><a href="index.php">Início</a></button>
        </div>
    </form>
</div>
</div>