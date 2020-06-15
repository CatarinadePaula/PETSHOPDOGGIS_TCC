<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    $idProd = mysqli_real_escape_string($conn, $_POST['COD_PRODUTO']);
    error_log("Deleta cliente $idProd");


    

//Inserir info
   /* error_log("AQUI");
    $insert_usuario="SELECT * FROM cadastro_clientes WHERE COD_CLIENTE = '$idProd'";
    $insert_usuario = mysqli_query($conn, $insert_usuario);
    $resultado = mysqli_fetch_assoc($insert_usuario);

    $return = json_encode($resultado);*/

//deletar info
$delete_user= "DELETE FROM cadastro_produtos WHERE COD_PRODUTO = '$idProd'";
$delete_user =  mysqli_query($conn, $delete_user);


error_log("DELETE FROM cadastro_produtos WHERE COD_PRODUTO = '$idProd'");
//$return = json_encode($resultado);



header("Location: /bs4/Layout/src/produtos/Produtos.php");



?>