<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idCliente = $_POST["id_cliente"];
   
   $varSQL = "DELETE FROM Cliente WHERE id_cliente ={$idCliente}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>