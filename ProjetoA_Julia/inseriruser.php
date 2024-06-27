<?php
    if($_POST["cxnome"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxsenha"];
        $sql = "insert into tbusuario(nome,email,senha)
        values('$nome','$email','$senha')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso !";
    }
    else
    {
        echo "dados não cadastrados!";
    }
?>
