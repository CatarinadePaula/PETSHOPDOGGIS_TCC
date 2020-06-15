<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    
    $vnomeproduto = mysqli_real_escape_string($conn, $_POST["NOME_PRODUTO"]);
    $vfabprod= mysqli_real_escape_string($conn, $_POST["FAB_PRODUTO"]);
    $vprecoprod=mysqli_real_escape_string($conn, $_POST["PRECO_PRODUTO"]);
    $vespprod= mysqli_real_escape_string($conn, $_POST["ESP_PRODUTO"]);
    $vqtdprod=mysqli_real_escape_string($conn, $_POST["QTD_PRODUTO"]);
    $vpatazprod= mysqli_real_escape_string($conn, $_POST["PATAZ_PRODUTO"]);
    error_log(json_encode($_POST));





//Inserir info
    $insert_usuario="INSERT INTO cadastro_produtos VALUES (NULL,'$vnomeproduto', '$vfabprod', $vprecoprod, '$vespprod', $vqtdprod, $vpatazprod)";
    error_log("INSERT INTO cadastro_produtos VALUES (NULL,'$vnomeproduto','$vfabprod', $vprecoprod, '$vespprod', $vqtdprod, $vpatazprod)");
    $insert_usuario = mysqli_query($conn, $insert_usuario);

header("Location: /bs4/Layout/src/prdutos/Produtos.php");


?>