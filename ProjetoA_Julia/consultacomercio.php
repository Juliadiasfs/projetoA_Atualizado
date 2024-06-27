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
    <title>Consulte sua Comércio</title>
    </head>
<body>
<header>
        <h1>Consulte seu Comércio</h1>
        <nav>
            <ul>
                <li><a href="index.php">Menu</a></li>

            </ul>
        </nav>
    </header>
    
    <?php 
    include_once "factory/conexao.php";
  
    if(isset($_POST["comercio_name"])) {
        $nome = $_POST["comercio_name"];
        $consultar = "SELECT * FROM tbcomercial WHERE comercio = '$nome'";
        $executar = mysqli_query($conn, $consultar);
        $linha = mysqli_fetch_array($executar);
        
     
        if($linha) {
    ?>

        <form>
            <label for="">Nome:</label>
            <input type="text" name="" value="<?php echo $linha['nome'] ?>"/>

            <label for="">Empresa:</label>
            <input type="text" name="" value="<?php echo $linha['comercio'] ?>"/>

            <label for="">Telefone:</label>
            <input type="text" name="" value="<?php echo $linha['telefone'] ?>"/>

            <label for="">WhatsApp:</label>
            <input type="text" name="" value="<?php echo $linha['whats'] ?>"/>
        </form>

    <?php 
        } else {
        
            echo "<div class='mensagem'><h2>Comércio não encontrado. Verifique o nome e tente novamente<h2></div>";
        }
    }
    ?>

        <footer>
            <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
        </footer>

</body>
</html>