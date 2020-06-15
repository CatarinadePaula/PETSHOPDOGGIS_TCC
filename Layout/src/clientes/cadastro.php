<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    $idCliente = mysqli_real_escape_string($conn, $_POST['COD_CLIENTE']);  
    
    $vnomecliente = mysqli_real_escape_string($conn, $_POST['NOME_CLIENTE']);
    $vRG= mysqli_real_escape_string($conn, $_POST["RG_CLIENTE"]);
    $vCPF=mysqli_real_escape_string($conn, $_POST["CPF_CLIENTE"]);
    $vend= mysqli_real_escape_string($conn, $_POST["END_CLIENTE"]);
    $vemail=mysqli_real_escape_string($conn, $_POST["EMAIL_CLIENTE"]);
    $vtotalpataz= mysqli_real_escape_string($conn, $_POST["TOTALPATAZ_CLIENTE"]);
    error_log(json_encode($_POST));


    
if($idCliente==''){
    error_log("igual");

//Inserir info
    $insert_usuario="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)";
    error_log("INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)");
    $insert_usuario = mysqli_query($conn, $insert_usuario);
}else{
    error_log("diferente");

    $update_usuario="UPDATE cadastro_clientes SET NOME_CLIENTE = '$vnomecliente', RG_CLIENTE = $vRG, CPF_CLIENTE = $vCPF, END_CLIENTE = '$vend', EMAIL_CLIENTE = '$vemail', TOTALPATAZ_CLIENTE = $vtotalpataz WHERE COD_CLIENTE = $idCliente";
    $update_usuario = mysqli_query($conn, $update_usuario);
}


header("Location: /bs4/Layout/src/clientes/Clientes.php");


//Mensagem de gravacao de info

//    if($linhas == 1){
//    echo "Registro gravado com sucesso</br>";
//    }else{
//        echo "Falha na gravação do registro</br>";
//    }


?>