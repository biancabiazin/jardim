<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idItens = $_POST["id_itens"];
   
   $varSQL = "DELETE FROM Itens_Pedido WHERE id_itens ={$idItens}";

   mysqli_query($conn,$varSQL)or die(mysqli_error());

mysqli_close($conn);
?>