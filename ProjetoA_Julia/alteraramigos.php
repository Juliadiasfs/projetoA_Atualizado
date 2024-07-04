<?php
    include_once "factory/conexao.php";
    $id = $_POST["cxcodigo"];
    $amigo = $_POST["cxamigo"];
    $email = $_POST["cxemail"];
    $telefone = $_POST["cxtelefone"];
    $whatsapp = $_POST["cxwhats"];
    $datanasc = $_POST["cxdatanasc"];

    $alterar = "
    UPDATE tbamigos SET 
    amigo = '$amigo',
    email = '$email',
    telefone = '$telefone',
    whats = '$whatsapp',
    datanasc = '$datanasc'
    where 
    cod = '$id'
    
    ";

    $executar = mysqli_query($conn, $alterar);
    if($executar){
        echo "Dados alterados com sucesso";
    }else{
        echo "Erro ao alterar os dados";

    }
?>
<a href="telaamigos.php">Voltar</a>