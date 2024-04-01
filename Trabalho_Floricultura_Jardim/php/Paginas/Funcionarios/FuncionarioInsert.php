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

   $varSQL = "INSERT INTO Funcionario(id_funcionario,nome,cpf,cargo,salario,contato) 
              VALUES({$idFuncionario},'{$nomeFuncionario}','{$cpfFuncionario}','{$cargoFuncionario}', '{$salFuncionario}','{$contFuncionario}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());      
   
mysqli_close($conn);
?>