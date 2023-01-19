<?php

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$dbname   = "company";

$conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);

 if(!$conexao) {
    die("houve um erro".mysqli_connect_errno());
 }else{
    echo'Enviado com sucesso!';
 }

?>