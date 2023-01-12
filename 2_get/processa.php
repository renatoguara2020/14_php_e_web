<?php

include_once 'connection.php';


  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['nome']) || empty($_POST['idade']) || empty($_POST['email'])){

     // print_r($_POST);

     echo 'Preencha os campos com suas informações';
    

    }else{
      
      $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  




$stmt = $conn->prepare("INSERT INTO usuarios (nome, idade, email) VALUES (:nome, :idade, :email)");
$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
$stmt->bindValue(':idade', $idade, PDO::PARAM_INT);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();

echo ('O seu nome é  ' .  $nome .'  e você tem  ' . $idade . 'anos e seu e-mail e: '.  $email);

    }
  }
?>