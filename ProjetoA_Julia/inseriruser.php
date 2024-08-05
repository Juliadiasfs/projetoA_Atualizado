<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylemsg.css">
    <title>Cadastro de Cliente</title>
</head>
<body>

<header>
    <h1>Cadastro Cliente</h1>
    <nav>
        <ul>
            <li><a href="index.php">Menu</a></li>
        </ul>
    </nav>
</header>
<div class="main-content">
<?php
    if($_POST["cxnome"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxsenha"];

        $sql = "INSERT INTO tbusuario(nome,email,senha)
        VALUES('$nome','$email','$senha')";

        $query = mysqli_query($conn,$sql);

        if ($query) {
            echo "<div class='mensagem sucesso'>Dados cadastrados com sucesso!<br><a href='telacaduser.php'>Voltar</a></div>";
        } else {
            echo "<div class='mensagem erro'>Erro ao cadastrar os dados: " . mysqli_error($conn) . "<br><a href='telaacaduser.php'>Voltar</a></div>";
        }
    } else {
        echo "<div class='mensagem erro'>Dados não cadastrados! Preencha todos os campos.<br><a href='telacaduser.php'>Voltar</a></div>";
    }
?>
</div>

<footer>
    <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
</footer>

</body>
</html>
