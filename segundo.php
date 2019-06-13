<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

if(isset($login) && empty($login)){
    echo "Por favor preencha o campo login<br>";

if(isset($senha) && empty($senha)){
    echo "Por favor preencha o campo senha<br>";
}
echo "<a href='javascript:window.history.go(-1)'>Clique</a>";
}
include 'terceiro.php';
?>