<?php
    if($_POST["cxamigo"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxamigo"];
        $email = $_POST["cxemail"];
        $telefone = $_POST["cxtelefone"];
        $whats = $_POST["cxwhats"];
        $nascimento = $_POST["cxnascimento"];
        $sql = "insert into tbamigos(amigo,email,telefone,whats,datanasc)
        values('$nome','$email','$telefone','$whats','$nascimento')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso !";
    }
    else
    {
        echo "dados não cadastrados!";
    }
?>