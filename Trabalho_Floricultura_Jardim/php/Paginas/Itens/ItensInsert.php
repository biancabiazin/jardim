<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idItens = $_POST["id_itens"];
   $qtdItens = $_POST["qtd_itens"];
   $plantaItens = $_POST["fk_planta"];

   $varSQL = "INSERT INTO Itens_Pedido(id_itens,qtd_itens,fk_planta) 
              VALUES({$idItens},'{$qtdItens}','{$plantaItens}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());      
   
mysqli_close($conn);
?>