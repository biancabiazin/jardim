<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Pedidos</title>
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
            <li><a href="#">PEDIDOS</a></li>
            <li><a href="../Itens/index.php">ITENS DO PEDIDO</a></li>
            <li><a href="../Enderecos/index.php">ENDEREÇOS</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="titulo">
    <p>PEDIDOS</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Novo Cliente</p>
    <form class="formulario" name="CadPedido" method="POST" action="../../php/Paginas/Pedidos/PedidoInsert.php">
      <label class="inputs">
        <strong>ID do Pedido</strong><br>
        <input type="number" name="id_pedido" placeholder="Informe o ID do Pedido" required><br>
      </label>
      <label class="inputs">
        <strong>Data</strong><br>
        <input type="date" name="data" placeholder="Informe a Data" required><br>
      </label>
      <label class="inputs">
        <strong>Status do Pedido</strong><br>
        <input name="status" placeholder="Selecione o Status do Pedido" required /><br>
      </label>
      <label class="inputs">
        <strong>Cliente</strong><br>
        <input name="cliente" placeholder="Selecione o cliente que realizou o Pedido" required/><br>
      </label>
      <label class="inputs">
        <strong>Funcionário</strong><br>
        <input name="funcionario" placeholder="Selecione o Funcionário que cadatrou o Pedido" required/><br>
      </label>
      <label class="inputs">
        <strong>Itens</strong><br>
        <input name="itens" placeholder="Selecione os Itens que fazem parte do Pedido" required /><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">  
      <button>
        <a href="../Pedidos/PedidoPageUpdate.php">Editar um Pedido</a>
      </button>
      <button>
        <a href="../Pedidos/PedidoPageDelete.php">Excluir um Pedido</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Data</td>
      <td>Status</td>
      <td>Cliente</td>
      <td>Funcionário</td>
      <td>Itens</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "Jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Pedido order by id_pedido";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["data_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["status_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["id_cliente"]; ?>
        </td>
        <td>
          <?php echo $i["id_funcionario"]; ?>
        </td>
        <td>
          <?php echo $i["id_itens"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>