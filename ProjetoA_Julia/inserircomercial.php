<?php
    if($_POST["cxnome"] != ""){
        include_once 'factory/conexao.php';
        $nome = $_POST["cxnome"];
        $comercio = $_POST["cxcomercio"];
        $telefone = $_POST["cxtelefone"];
        $whats = $_POST["cxwhats"];
        $sql = "insert into tbcomercial(nome,comercio,telefone,whats)
        values('$nome','$comercio','$telefone','$whats')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso !";
    }
    else
    {
        echo "dados não cadastrados!";
    }
?>