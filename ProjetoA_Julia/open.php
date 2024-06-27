<?php
session_start();
include_once "factory/conexao.php";

$login = $_POST["cxlogin"];
$email = $_POST["cxemail"];
$senha = $_POST["cxsenha"];

$sql = "SELECT * FROM tblogin WHERE nome = '$login' AND email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION["login"] = $login;
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;

    header("location: index.php");
    exit();
} else {
    echo "E-mail e senha errados!";
    unset($_SESSION["login"]);
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
}
?>
