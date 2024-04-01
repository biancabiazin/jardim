<?php
  $conn = mysqli_connect("localhost","root","","Jardim");
  if(!$conn){
    die("Conexão Falhou!".mysqli_connect_error());
  }else{
   echo " ";
  }

  $idCliente = $_POST["id_cliente"];
  $nomeCliente = $_POST["nome"];
  $telCliente = $_POST["telefone"];
  $emailCliente = $_POST["email"];
  $cpfCliente = $_POST["cpf"];
  $endeCliente = $_POST["fk_endereco"];

  $varSQL = "UPDATE Cliente 
             SET   nome = '$nomeCliente', telefone = '$telCliente', email = '$emailCliente', cpf = '$cpfCliente', fk_endereco = '$endeCliente'
             WHERE id_cliente = {$idCliente};";

  mysqli_query($conn,$varSQL)or die(mysqli_error());
  
mysqli_close($conn);   
?>