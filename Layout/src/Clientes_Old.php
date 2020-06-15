<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("conexao.php");

    /*$vnomecliente=$_POST["NOME_CLIENTE"];
    $vRG=$_POST["RG_CLIENTE"];
    $vCPF=$_POST["CPF_CLIENTE"];
    $vend=$_POST["END_CLIENTE"];
    $vemail=$_POST["EMAIL_CLIENTE"];
    $vtotalpataz=$_POST["TOTALPATAZ_CLIENTE"];
    */
    $vnomecliente = mysqli_real_escape_string($conn, $_POST['NOME_CLIENTE']);
    $vRG= mysqli_real_escape_string($conn, $_POST["RG_CLIENTE"]);
    $vCPF=mysqli_real_escape_string($conn, $_POST["CPF_CLIENTE"]);
    $vend= mysqli_real_escape_string($conn, $_POST["END_CLIENTE"]);
    $vemail=mysqli_real_escape_string($conn, $_POST["EMAIL_CLIENTE"]);
    $vtotalpataz= mysqli_real_escape_string($conn, $_POST["TOTALPATAZ_CLIENTE"]);
    error_log(json_encode($_POST));


    //Criar a conexao
    //$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


//Inserir info
    $insert_usuario="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)";
    error_log("INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)");
    $insert_usuario = mysqli_query($conn, $insert_usuario);


header('Location: /Clientes.php');

//Mensagem de gravacao de info

//    if($linhas == 1){
//    echo "Registro gravado com sucesso</br>";
//    }else{
//        echo "Falha na gravação do registro</br>";
//    }

//Update info

    //$update_usuario="UPDATE cadastro_clientes SET NOME_CLIENTE WHERE COD_CLIENTE = 2";
    // $resultado_usuario = mysqli_query($conn, $resultado_usuario);



    //adicao manual no banco - ok//
    /*
   $vnomecliente="Catarina"; //NOME_CLIENTE
    $vRG="3434343"; //RG_CLIENTE
  $vCPF="65657675"; //CPF_CLIENTE
  $vend="Papa Joao XXIII"; //END_CLIENTE
   $vemail="mcr-catarina@hotmail.com"; //EMAIL_CLIENTE
   $vtotalpataz="34002"; //TOTALPATAZ_CLIENTE


   // $sql="INSERT INTO cadastro_clientes (NOME_CLIENTE) VALUES ('$vnomecliente')";

  $insert_usuario="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)";
    $insert_usuario = mysqli_query($conn, $insert_usuario);
    */
?>