<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    
    $idServ = mysqli_real_escape_string($conn, $_POST['pesquisa']);


    

//Inserir info
    error_log("AQUI");
    $insert_usuario="SELECT * FROM cadastro_servicos WHERE COD_SERVICO = '$idServ'";
    $insert_usuario = mysqli_query($conn, $insert_usuario);
    $resultado = mysqli_fetch_assoc($insert_usuario);

    $return = json_encode($resultado);

header("Location: /bs4/Layout/src/servicos/Servicos.php?return=$return");




?>