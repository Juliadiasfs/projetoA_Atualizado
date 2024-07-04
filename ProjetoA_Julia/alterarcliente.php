<?php
    include_once "factory/conexao.php";
    $id = $_POST["cxcodigo"];
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    $alterar = "
    UPDATE tbusuario SET 
    nome = '$nome',
    email = '$email',
    senha = '$senha'
    where 
    cod = '$id'
    
    ";

    $executar = mysqli_query($conn, $alterar);
    if($executar){
        echo "Dados alterados com sucesso";
    }else{
        echo "Erro ao alterar os dados";

    }
?>
<a href="telacaduser.php">Voltar</a>