<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body>

    <header id="banner">
        <img src="img/.png" alt="" id="logo">
        <h1 id="titulo">GuardCad</h1>
    </header>
    <main>

            <form  id="cadastroForm" action="open.php" method="POST">
                <img src="img/login.png" alt="" style="width: 200px; height: 200px;">
                <div id="cxprincipal">
                        <div class="container_form__itens">

                            <div class="container_form_itens__inputs">

                                <div class="container_form_input">
                                    <label>Usuário:</label><br />
                                    <input type="text" name="cxlogin" class="cxuser">
                                </div>

                                <div class="container_form_input">
                                    <label>E-mail:</label> <br />
                                    <input type="email" name="cxemail">
                                </div>

                                <div class="container_form_input">
                                    <label>Senha:</label> <br />
                                    <input type="password" name="cxsenha" class="cxsenha">
                                </div>

                            </div>

                            <div class="container_form_itens__submit">
                                <input type="submit" value="Acessar">
                            </div>

                        </div>
                        <p>Ainda não tem cadastro?
                            <a href="cadastro.php" onclick="toggleForms()" style="color: black;">Cadastre-se</a>
                        </p>
            </form>

    </main>


    <footer>
        <p>&copy; 2024 Julia Dias Turma A. Todos os direitos reservados.</p>
    </footer>
</body>

</html>