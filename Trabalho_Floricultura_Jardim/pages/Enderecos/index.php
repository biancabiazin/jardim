<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Endereços</title>
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
            <li><a href="#">ENDEREÇOS</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="titulo">
    <p>ENDEREÇOS</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Novo Endereço</p>
    <form class="formulario" name="CadEndereco" method="POST" action="../../php/Paginas/Enderecos/EnderecoInsert.php">
      <label class="inputs">
        <strong>ID do Endereço</strong><br>
        <input class="input" type="text" name="id_endereco" placeholder="Insira o ID" required><br>
      </label>
      <label class="inputs">
        <strong>Rua</strong><br>
        <input class="input" type="text" name="rua" placeholder="Insira o nome da Rua" required><br>
      </label>
      <label class="inputs">
        <strong>Bairro</strong><br>
        <input class="input" type="text" name="bairro" placeholder="Insira o Bairro" required><br>
      </label>
      <label class="inputs">
        <strong>Número</strong><br>
        <input class="input" type="number" name="numero" placeholder="Insira o Número" required><br>
      </label>
      <label class="inputs">
        <strong>Complemento</strong><br>
        <input class="input" type="text" name="complemento" placeholder="Insira o Complemento" required><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">
      <button>
        <a href="../Enderecos/EnderecoPageUpdate.php">Editar um Endereço</a>
      </button>
      <button>
        <a href="../Enderecos/EnderecoPageDelete.php">Excluir um Endereço</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Rua</td>
      <td>Bairro</td>
      <td>Númeor</td>
      <td>Complemento</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "Jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Endereco order by id_endereco";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_endereco"]; ?>
        </td>
        <td>
          <?php echo $i["rua"]; ?>
        </td>
        <td>
          <?php echo $i["bairro"]; ?>
        </td>
        <td>
          <?php echo $i["numero"]; ?>
        </td>
        <td>
          <?php echo $i["complemento"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>