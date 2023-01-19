<?php

if(isset($_POST['nome'])) {

    //print_r('nome:'.$_POST['nome']);
   // print_r('<br>');
    //print_r('email:'.$_POST['email']);
   // print_r('<br>');
   // print_r('telefone:'.$_POST['telefone']);

   include_once("conexao.php");

   $nome      =        $_POST['nome'];
   $email     =        $_POST['email'];
   $telefone  =       $_POST['telefone'];

   $result = mysqli_query($conexao,"INSERT INTO clientes(nome,email,telefone) 
   VALUES('$nome','$email','$telefone')");
}

?>