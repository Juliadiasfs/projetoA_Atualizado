<?php
 include_once "factory/conexao.php";
 $id= $_GET["id"];
 $excluir= "delete from tbamigos where cod='$id'";
 $executar = mysqli_query($conn,$excluir);
 if($executar){
    echo "Cliente excluido com sucesso!";
    echo "<br/>";
    echo "<a href='telaamigos.php'>Voltar</a>";
 }
 else{
    echo"Erro de dados, ao excluir o cliente";
 }
?>