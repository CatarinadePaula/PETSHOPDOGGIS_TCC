<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    $idServ = mysqli_real_escape_string($conn, $_POST['COD_SERVICO']);

    
    $vnomeserv = mysqli_real_escape_string($conn, $_POST["NOME_SERVICO"]);
    $vtemposerv= mysqli_real_escape_string($conn, $_POST["TEMPO_SERVICO"]);
    $vrespserv=mysqli_real_escape_string($conn, $_POST["RESP_SERVICO"]);
    $vprecoserv=mysqli_real_escape_string($conn, $_POST["PRECO_SERVICO"]);
    $vprodserv= mysqli_real_escape_string($conn, $_POST["PROD_SERVICO"]);
    $vpatazserv= mysqli_real_escape_string($conn, $_POST["PATAZ_SERVICO"]);
    error_log(json_encode($_POST));

if($idServ==''){
    error_log("igual");
    
    $insert_usuario="INSERT INTO cadastro_servicos VALUES (NULL,'$vnomeserv', '$vtemposerv', '$vrespserv', $vprecoserv, '$vprodserv', $vpatazserv )";
    error_log("INSERT INTO cadastro_servicos VALUES (NULL,'$vnomeserv', '$vtemposerv', '$vrespserv', $vprecoserv, '$vprodserv', $vpatazserv )");
    $insert_usuario = mysqli_query($conn, $insert_usuario);

}else{
    error_log("diferente");

    $insert_usuario="UPDATE cadastro_servicos SET NOME_SERVICO = '$vnomeserv', TEMPO_SERVICO = '$vtemposerv', RESP_SERVICO = '$vrespserv', PRECO_SERVICO = $vprecoserv, PROD_SERVICO = '$vprodserv', PATAZ_SERVICO = $vpatazserv WHERE COD_SERVICO = $idServ";
    $insert_usuario = mysqli_query($conn, $insert_usuario);
}



//Inserir info


header("Location: /bs4/Layout/src/servicos/Servicos.php");


?>