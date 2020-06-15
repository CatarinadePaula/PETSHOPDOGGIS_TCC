<?php

    include "conexao.inc";

    $vnomecliente=$_POST["NOME_CLIENTE"];
    $vRG=$_POST["RG_CLIENTE"];
    $vCPF=$_POST["CPF_CLIENTE"];
    $vend=$_POST["END_CLIENTE"];
    $vemail=$_POST["EMAIL_CLIENTE"];
    $vtotalpataz=$_POST["TOTALPATAZ_CLIENTE"];

    $sql="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)";
    $res=mysqli_query($con,$sql);
    $linhas=mysqli_affectedrows($con);

    if($linhas == 1){
        echo "Registro gravado com sucesso</br>";
    }else{
        echo "Falha na gravação do registro</br>";
    }


    //adicao manual no banco - ok//
//    $vnomecliente="Catarina"; //NOME_CLIENTE
//    $vRG="3434343"; //RG_CLIENTE
//    $vCPF="65657675"; //CPF_CLIENTE
//    $vend="Papa Joao XXIII"; //END_CLIENTE
//    $vemail="mcr-catarina@hotmail.com"; //EMAIL_CLIENTE
//    $vtotalpataz="34002"; //TOTALPATAZ_CLIENTE


   // $sql="INSERT INTO cadastro_clientes (NOME_CLIENTE) VALUES ('$vnomecliente')";

//   $sql="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomecliente', $vRG, $vCPF, '$vend', '$vemail', $vtotalpataz)";
//    $res=mysqli_query($con,$sql);


    mysqli_close($con);
?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title> LOGIN PAGE </title>

        </head>


</body>
</html>