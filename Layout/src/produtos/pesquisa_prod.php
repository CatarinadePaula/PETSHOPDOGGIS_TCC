<?php

    session_start();    
    //Incluindo a conexão com banco de dados
    include_once("../conexao.php");

    
    $idProd = mysqli_real_escape_string($conn, $_POST['pesquisa']);


    //Criar a conexao
    //$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


//Inserir info
    error_log("AQUI");
    $insert_usuario="SELECT * FROM cadastro_produtos WHERE COD_PRODUTO = '$idProd'";
    $insert_usuario = mysqli_query($conn, $insert_usuario);
    $resultado = mysqli_fetch_assoc($insert_usuario);

    $return = json_encode($resultado);

header("Location: /bs4/Layout/src/produtos/Produtos.php?return=$return");



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