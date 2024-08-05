<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylemenu.css">
    <title>Menu</title>
    <?php
    SESSION_START();
    if((!isset($_SESSION["login"])==true)&&
    (!isset($_SESSION["senha"])==true))
    {
        header("location:login.php");
    }
    $logado = $_SESSION["login"];
    
    ?>
</head>

<body>

    <section id="cxprincipal">
        <header id="banner">
            <div class="usuario">
            <img id="fotousuario" src="img/usuario.png" alt="" style="width: 75px; height: 75px;">
            <?php echo $logado?></div>
            <img src="img/Guarda.png" alt="" id="logo">
            <h1 id="titulo">GuardCad</h1>
        </header>

        <footer id="rodape">
    <a class="sair" href="sair.php">
        <img src="img/sair.png" alt="Sair" style="width: 30px; height: 30px;">
    </a>
    <h4 id="direitos">&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</h4>
</footer>


        <nav id="cxamigo">
            Cadastre seus amigos
            <a href="telaamigos.php" class="link-imagem">
                <figure><img src="img/conversa-fiada.png" alt=""></figure>
            </a>
        </nav>
        <nav id="cxcomercio">

            Cadastre seu comércio
            <a href="telacadcomercial.php">
                <figure><img src="img/acordo.png" alt=""></figure>
            </a>
        </nav>
        <nav id="cxusuario">
            Cadastre seu cliente
            <a href="telacaduser.php">
                <figure><img src="img/do-utilizador (1).png" alt=""></figure>
            </a>
            
        </nav>


    </section>

    
</body>

</html>