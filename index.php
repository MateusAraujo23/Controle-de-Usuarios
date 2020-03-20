<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Usuários</title>
</head>
<body>
<?php
require "config.php";
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
            if($sql->rowCount() > 0) {
                foreach($sql->fetchAll() as $usuario) {
                    echo "<tr>";
                    echo "<td>".$usuario['nome']."</td>";
                    echo "<td>".$usuario['email']."</td>";
                    echo "<td><a href='editar.php?id=".$usuario['id']."'>Editar</a> - <a href='excluir.php?id=".$usuario['id']."'>Excluir</a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>
<a href="adicionar.php" class="btn btn-primary btn-lg">Adicionar Novo Usuário</a>
</body>
</html>