<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idEndereco = $_POST["id_endereco"];
   
   $varSQL = "DELETE FROM Endereco WHERE id_endereco ={$idEndereco}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>