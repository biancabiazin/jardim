<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Plantas</title>
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
        <li><a href="#">PLANTAS</a></li>
        <li><a href="../Funcionarios/index.php">FUNCIONÁRIOS</a></li>
        <li>
          <a class="cliente" href="../Clientes/index.php">
            CLIENTES
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
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

  <div class="titulo">
    <p>PLANTAS</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Nova Planta</p>
    <form class="formulario" name="CadPlanta" method="POST" action="../../php/Paginas/Plantas/PlantaInsert.php">
      <label class="inputs">
        <strong>ID</strong><br>
        <input class="input" type="number" name="id_planta" placeholder="Insira o ID da Planta" required><br>
      </label>
      <label class="inputs">
        <strong>Nome</strong><br>
        <input class="input" type="text" name="nome" placeholder="Insira o Nome" required><br>
      </label>
      <label class="inputs">
        <strong>Espécie</strong><br>
        <input class="input" type="text" name="especie" placeholder="Insira a Espécie" required><br>
      </label>
      <label class="inputs">
        <strong>Preço</strong><br>
        <input class="input" type="text" name="preco" placeholder="R$00,00" required><br>
      </label>
      <label class="inputs">
        <strong>Qtd em Estoque</strong><br>
        <input class="input" type="number" name="qtd_estoque" placeholder="0" required><br>
      </label>
      <label class="inputs">
        <strong>Tamanho</strong><br>
        <input class="input" type="number" name="tamanho" placeholder="0.0" required><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">
      <button>
        <a href="../Plantas/PlantaPageUpdate.php">Editar uma Planta</a>
      </button>
      <button>
        <a href="../Plantas/PlantaPageDelete.php">Excluir uma Planta</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Espécie</td>
      <td>Preço</td>
      <td>Qtd. Estoque</td>
      <td>Tamanho</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "Jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Planta order by id_planta";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
    ?>
      <tr>
        <td>
          <?php echo $i["id_planta"]; ?>
        </td>
        <td>
          <?php echo $i["nome"]; ?>
        </td>
        <td>
          <?php echo $i["especie"]; ?>
        </td>
        <td>
          <?php echo $i["preco"]; ?>
        </td>
        <td>
          <?php echo $i["qtd_estoque"]; ?>
        </td>
        <td>
          <?php echo $i["tamanho"]; ?>
        </td>
      </tr>
    <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>