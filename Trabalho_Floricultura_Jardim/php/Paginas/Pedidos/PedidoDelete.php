<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idPedido = $_POST["id_pedido"];
   
   $varSQL = "DELETE FROM Pedido WHERE id_pedido ={$idPedido}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>