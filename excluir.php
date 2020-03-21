<?php
require "config.php";
require "head.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $pdo->query($sql);

    echo "<h1>Usuário Deletado!</h1>";

    header("Refresh:2.5; url=index.php");
}
?>