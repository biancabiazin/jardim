<?php
  $conn = mysqli_connect("localhost","root","","Jardim");
  if(!$conn){
    die("Conexão Falhou!".mysqli_connect_error());
  }else{
   echo " ";
  }

  $idFuncionario = $_POST["id_funcionario"];
  $nomeFuncionario = $_POST["nome"];
  $cpfFuncionario = $_POST["cpf"];
  $cargoFuncionario = $_POST["cargo"];
  $salFuncionario = $_POST["salario"];
  $contFuncionario = $_POST["contato"];

  $varSQL = "UPDATE Funcionario 
             SET    nome = '$nomeFuncionario', cpf = '$cpfFuncionario', cargo = '$cargoFuncionario', salario = '$salFuncionario', contato = '$contFuncionario'
             WHERE id_funcionario = {$idFuncionario};";

  mysqli_query($conn,$varSQL)or die(mysqli_error());      
  
mysqli_close($conn);   
?>