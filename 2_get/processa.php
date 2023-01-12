<?php


  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['nome']) && isset($_POST['idade']) && $_POST['email']){
      $nome = $_POST['nome'];
      $idade = $_POST['idade'];
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      print_r($_POST);
    

}

echo ("O seu nome é  $nome  e você tem  $idade  anos e seu e-mail e: $email");

}

?>