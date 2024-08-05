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
    <title>Cadastro de Comercial</title>
</head>
<body>

<header>
    <h1>Cadastro Comercial</h1>
    <nav>
        <ul>
            <li><a href="index.php">Menu</a></li>
        </ul>
    </nav>
</header>

<div class="main-content">
    <?php
    include_once "factory/conexao.php";
    $id = $_POST["cxcodigo"];
    $nome = $_POST["cxnome"];
    $comercio = $_POST["cxempresa"];
    $telefone = $_POST["cxtelefone"];
    $whatsapp = $_POST["cxwhats"];


    $alterar = "
    UPDATE tbcomercial SET 
    nome = '$nome',
    comercio = '$comercio',
    telefone = '$telefone',
    whats = '$whatsapp'
    WHERE
    cod = '$id'
    ";


    $executar = mysqli_query($conn, $alterar);
    if($executar){
        echo "<div class='mensagem sucesso'>Dados alterados com sucesso!<br><a href='telacadcomercial.php'>Voltar</a></div>";
    } else {
        echo "<div class='mensagem erro'>Erro ao alterar os dados: " . mysqli_error($conn) . "<br><a href='telacadcomercial.php'>Voltar</a></div>";
    }
    ?>
</div>

<footer>
    <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
</footer>

</body>
</html>
