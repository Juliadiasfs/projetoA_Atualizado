<?php
    if($_POST["cxlogin"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxlogin"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxsenha"];
        $sql = "insert into tblogin(nome,email,senha)
        values('$nome','$email','$senha')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso !";
    }
    else
    {
        echo "dados não cadastrados!";
    }
?>
                        <p>Já possui cadastro?Faça o login
                            <a href="login.php" onclick="toggleForms()" style="color: black;">Loga-se</a>
                        </p>