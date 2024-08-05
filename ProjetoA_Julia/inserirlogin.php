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
    <title>Cadastro de Amigos</title>
</head>
<body>

<header id="banner">
        <img src="img/.png" alt="" id="logo">
        <h1 id="titulo">GuardCad</h1>

<div class="main-content">
    <?php
    if($_POST["cxlogin"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxlogin"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxsenha"];
        $sql = "insert into tblogin(nome,email,senha)
        values('$nome','$email','$senha')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!<a href='cadastro.php'>Loga-se</a>";

    }
    else
    {
        echo "Dados não cadastrados!<a href='cadastro.php'>Tente Novamente </a>";
    }
?>
</div>
