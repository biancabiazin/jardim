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

  $varSQL = "UPDATE Endereco 
             SET    rua = '$ruaEndereco', bairro = '$bairroEndereco', numero = '$numEndereco', complemento = '$compEndereco'
             WHERE id_endereco = {$idEndereco};";

  mysqli_query($conn,$varSQL)or die(mysqli_error());
  
mysqli_close($conn);   
?>