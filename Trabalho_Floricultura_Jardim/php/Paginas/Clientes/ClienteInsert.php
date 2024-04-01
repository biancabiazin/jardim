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

   $varSQL = "INSERT INTO Cliente(id_cliente,nome,telefone,email,cpf,fk_endereco) 
              VALUES({$idCliente},'{$nomeCliente}','{$telCliente}','{$emailCliente}', '{$cpfCliente}', '{$endeCliente}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());      
   
mysqli_close($conn);
?>