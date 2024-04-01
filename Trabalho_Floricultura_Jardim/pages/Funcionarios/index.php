<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Clientes</title>
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
        <li><a href="#">FUNCIONÁRIOS</a></li>
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
            <li><a href="../Enderecos/index.php">ENDEREÇO</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="titulo">
    <p>FUNCIONÁRIOS</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Novo Funcionário</p>
    <form class="formulario" name="CadFuncionario" method="POST" action="../../php/Paginas/Funcionarios/FuncionarioInsert.php">
      <label class="inputs">
        <strong>ID do Funcionário</strong><br>
        <input class="input" type="text" name="id_funcionario" placeholder="Insira o ID" required><br>
      </label>
      <label class="inputs">
        <strong>Nome</strong><br>
        <input class="input" type="text" name="nome" placeholder="Insira o Nome" required><br>
      </label>
      <label class="inputs">
        <strong>CPF</strong><br>
        <input class="input" type="text" name="cpf" placeholder="Insira o CPF" required><br>
      </label>
      <label class="inputs">
        <strong>Cargo</strong><br>
        <input class="input" type="text" name="cargo" placeholder="Insira o Cargo" required><br>
      </label>
      <label class="inputs">
        <strong>Salário</strong><br>
        <input class="input" type="number" name="salario" placeholder="Insira o Salário" required><br>
      </label>
      <label class="inputs">
        <strong>Contato</strong><br>
        <input class="input" type="text" name="contato" placeholder="Insira o Contato" required><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
      <button>
        <a href="../Funcionarios/FuncionarioPageUpdate.php">Editar um Funcionário</a>
      </button>
      <button>
        <a href="../Funcionarios/FuncionarioPageDelete.php">Excluir um Funcionário</a>
      </button>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>CPF</td>
      <td>Cargo</td>
      <td>Salário</td>
      <td>Contato</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "Jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Funcionario order by id_funcionario";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_funcionario"]; ?>
        </td>
        <td>
          <?php echo $i["nome"]; ?>
        </td>
        <td>
          <?php echo $i["cpf"]; ?>
        </td>
        <td>
          <?php echo $i["cargo"]; ?>
        </td>
        <td>
          <?php echo $i["salario"]; ?>
        </td>
        <td>
          <?php echo $i["contato"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>