<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleuser.css">
    <title>Consulta Amigo</title>
</head>
<body>
<header>
        <h1>Consulte Amigos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>
            </ul>
        </nav>
    </header>

    <?php
        include_once "factory/conexao.php";
        if(isset($_POST["amigo_name"])) {
        $nome = $_POST["amigo_name"];
        $consultar = "select * from tbamigos where amigo = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        if($linha) {
    
          
    ?>

        <form action="alteraramigos.php"  method="POST">

            <label for="">Codigo:</label>
            <input type="text" name="cxcodigo" value="<?php echo $linha['cod'] ?>" readonly/>
            
            <label for="">Nome:</label>
            <input type="text" name="cxamigo" value="<?php echo $linha['amigo'] ?>"/>

            <label for="">E-mail:</label>
            <input type="email" name="cxemail" value="<?php echo $linha['email'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="cxtelefone" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="cxwhats" value="<?php echo $linha['whats'] ?>"/>

            <label for="">Data de Nascimento:</label>
            <input type="date" name="cxdatanasc" value="<?php echo $linha['datanasc'] ?>"/>
            <input type="submit" value="Alterar">
            <p> Deseja excluir o cadastro de seu amigo?
            <a href="excluiramigos.php?id=<?php echo $linha["cod"]?>">Excluir</a>
        </p>
        </form>
        
        <?php
                        } else {
                            echo "<div class='mensagem'><h2>Amigo não encontrado. Verifique o nome e tente novamente<h2></div>";
                        }
                    }      
                ?>
        <footer>
            <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
        </footer>

</body>
</html>