<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='../Home/style.css'>
  <!-- <script src='script.js'></script> -->
</head>

<body>
  <header>
    <a href="../Home/index.html">
      <img src="../../public/icons/logo.png" alt="Logo Floricultura Jardim">
    </a>
    <nav>
      <ul>
        <li><a href="../Plantas/index.php">PLANTAS</a></li>
        <li><a href="../Funcionarios/index.php">FUNCIONÁRIOS</a></li>
        <li>
          <a class="cliente" href="../Clientes/index.php">
            CLIENTES
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
            </svg>
          </a>
          <ul class="dropdown">
            <li><a href="../Pedidos/index.php">PEDIDOS</a></li>
            <li><a href="../Itens/index.php">ITENS DO PEDIDO</a></li>
            <li><a href="../Enderecos/index.php">ENDEREÇOS</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="formulario-inserir">
    <form class="formulario" method="POST" action="../../php/Paginas/Enderecos/EnderecoUpdate.php">
      <b> ID do Endereço </b> <br>
      <input class="input" type="number" name="id_endereco" placeholder="Insira o ID do Endereço que quer editar"
        value="<?php echo $idEndereco ?>"><br>
      <b> Rua </b> <br> 
      <input class="input" type="text" name="rua" placeholder="Altere a Rua"
        value="<?php echo $ruaEndereco ?>"><br>
      <b> Bairro </b> <br> 
      <input class="input" type="text" name="bairro" placeholder="Altere o Bairro"
        value="<?php echo $bairroEndereco ?>"><br>
      <b> Número </b> <br> 
      <input class="input" type="number" name="numero" placeholder="Altere o número"
        value="<?php echo $numEndereco ?>"><br>
      <b> Complemento </b> <br> 
      <input class="input" type="text" name="complemento" value="<?php echo $compEndereco ?>"><br>
      <input class="limpar" type="reset" value="LIMPAR">
      <input class="inserir" type="submit" value="EDITAR">
  </div>
</body>

</html>