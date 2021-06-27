

<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha_usuario = "usbw";
$nome_banco = "arkia";
$con = mysqli_connect($nome_servidor, $nome_usuario, $senha_usuario, $nome_banco);
if (!$con) 
    die("A conexão falhou: " . mysqli_connect_error());
?>