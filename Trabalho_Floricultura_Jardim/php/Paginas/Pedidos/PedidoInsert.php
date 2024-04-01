<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idPedido = $_POST["id_pedido"];
   $dataPedido = $_POST["data_pedido"];
   $statusPedido = $_POST["status_pedido"];
   $clientePedido = $_POST["fk_cliente"];
   $funcPedido = $_POST["fk_funcionario"];
   $itensPedido = $_POST["fk_itens"];

   $varSQL = "INSERT INTO Pedido(id_pedido,data_pedido,status_pedido,fk_cliente,fk_funcionario,fk_itens)
              VALUES({$idPedido},'{$dataPedido}','{$statusPedido}','{$clientePedido}', '{$funcPedido}','{$itensPedido}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());
   
mysqli_close($conn);
?>