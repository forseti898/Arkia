<?php
	include_once "connect.php";
	$nome = $email = $textArea = "";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$textArea = $_POST["textArea"];
	$sql = "INSERT INTO mensagem (nome, email, text_area)
VALUES ('$nome', '$email', '$textArea')";
	if (mysqli_query($con,$sql) === TRUE) {
        header('Location: ../mensagem.html');
        exit();
    }     
	else {
        echo "Erro: " . $sql . "<br>" . mysqli_error();
    }
    
    mysqli_close($con);
?>
