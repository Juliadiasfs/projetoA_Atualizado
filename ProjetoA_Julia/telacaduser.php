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
    <title>User</title>
    <script>
        function toggleForms() {
            var cadastroForm = document.getElementById("cadastroForm");
            var consultaForm = document.getElementById("consultaForm");

            cadastroForm.style.display = cadastroForm.style.display === "none" ? "block" : "none";
            consultaForm.style.display = consultaForm.style.display === "none" ? "block" : "none";
        }
    </script>
</head>

<body>
    <header>
        <h1>Cadastro seu Cliente</h1>
        <nav>
            <ul>
                <li><a href="index.php"> Menu</a></li>
            </ul>
        </nav>
    </header>

    <form id="cadastroForm" action="inseriruser.php" method="POST">
        Nome:
        <input type="text" name="cxnome" /><br />
        Email:
        <input type="email" name="cxemail" /><br />
        Senha:
        <input type="password" name="cxsenha" /><br />
        <input type="submit" value="Gravar">
        <p>Já tem cadastro?
            <a href="#" onclick="toggleForms()" style="color: black;">Busque-o</a>
        </p>
    </form>

    <form action="consultanomeuser.php" id="consultaForm" style="display:none;" method="POST">
        Digite o nome completo: <br />
        <input type="text" name="cxpesquisanome" />
        <input type="submit" value="Buscar" />
        <p>Ainda não tem cadastro?
            <a href="telacaduser.php" onclick="toggleForms()"style="color: black;">Cadastre-se</a>
        </p>
    </form>

    <footer>
        <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
    </footer>

</body>

</html>
