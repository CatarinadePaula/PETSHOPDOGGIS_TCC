<?php

    include "conexao.inc";

    $vnomeservico=$_POST["NOME_SERVICO"];
    $vtemposervico=$_POST["TEMPO_SERVICO"];
    $vrespservico=$_POST["RESP_SERVICO"];
    $vprecoservico=$_POST["PRECO_SERVICO"];
    $vprodutoservico=$_POST["PROD_SERVICO"];
    $vpatazservico=$_POST["PATAZ_SERVICO"];

    $sql="INSERT INTO cadastro_clientes VALUES (NULL,'$vnomeservico', $vtemposervico, '$vrespservico', $vprecoservico, '$vprodutoservico', $vpatazservico)";
    $res=mysqli_query($con,$sql);
    $linhas=mysqli_affectedrows($con);

    if($linhas == 1){
        echo "Registro gravado com sucesso</br>";
    }else{
        echo "Falha na gravação do registro</br>";
    }

    mysqli_close($con);
?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title> LOGIN PAGE </title>

        </head>


</body>
</html>