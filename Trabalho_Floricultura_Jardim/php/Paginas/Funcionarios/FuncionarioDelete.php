<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idFuncionario = $_POST["id_funcionario"];
   
   $varSQL = "DELETE FROM Funcionario WHERE id_funcionario ={$idFuncionario}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>