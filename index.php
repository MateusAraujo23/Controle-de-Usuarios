<?php
require "config.php";
require "head.php";
?>
<body>
<div class="container">
<div class="tabela">
<h1>Tabela de Gerenciamento</h1>
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
            $sql = "SELECT * FROM usuarios order by id asc";
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
</div>
</div>
</body>
</html>