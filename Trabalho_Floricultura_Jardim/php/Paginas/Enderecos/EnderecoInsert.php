<?php
   $conn = mysqli_connect("localhost","root","","Jardim");
   if(!$conn){
     die("Conexão Falhou!".mysqli_connect_error());
   }else{
    echo " ";
   }

   $idEndereco = $_POST["id_endereco"];
   $ruaEndereco = $_POST["rua"];
   $bairroEndereco = $_POST["bairro"];
   $numEndereco = $_POST["numero"];
   $compEndereco = $_POST["complemento"];

   $varSQL = "INSERT INTO Endereco(id_endereco,rua,bairro,numero,complemento) 
              VALUES({$idEndereco},'{$ruaEndereco}','{$bairroEndereco}','{$numEndereco}', '{$compEndereco}')";

   mysqli_query($conn,$varSQL)or die(mysqli_error());      
   
mysqli_close($conn);
?>