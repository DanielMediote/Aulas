
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Marcas</title>
  <link rel="stylesheet" href="../css/marcas.css">
  <meta name="viewport" content="width=device-width">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
</head>
<body>
  <?php
  include_once 'navbar.php';
  
  function __autoload($classe)
  {
    require_once "../classes/{$classe}.class.php";
  }

  if (filter_has_var(INPUT_POST, 'btnIncluir')) {
    $marca = new Marca();
    $nome = filter_input(INPUT_POST, 'nome');
    $fornecedor = filter_input(INPUT_POST, 'fornecedor');

    $marca->setNome($nome);
    $marca->setFornecedor($fornecedor);
    $marca->insert();
  }
  ?>
  <div class="container">
    <form class="" action="" method="post">
      <fieldset>
        <legend>Nova Marca</legend>
        <div class="mahi_holder">
          <div class="container">
            <div class="row bg_3">
              <div class="col-3-form input-effect">
                <input class="effect-24" type="text" name="nome" required>
                <label>Nome</label>
                <span class="focus-bg"></span>
              </div>
              <div class="col-3-form input-effect">
                <input class="effect-24" type="text" name="fornecedor" required>
                <label>Fornecedor</label>
                <span class="focus-bg"></span>
              </div>
              <div class="col-3-form input-effect">
                <button class="btnIncluir" type="submit" name="btnIncluir">Incluir</button>
              </div>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="container-table">
    <table class="table">
      <thead>
        <tr class="table-header">
          <th class="header__item">ID</th>
          <th class="header__item">Nome</th>
          <th class="header__item">Fornecedor</th>
        </tr>
      </thead>
      <tbody class="table-content">
        <?php


        ?>
        <tr class="table-row">
          <td class="table-data">1</td>
          <td class="table-data">CG 150</td>
          <td class="table-data">Honda</td>
        </tr>
        <tr class="table-row">
          <td class="table-data">2</td>
          <td class="table-data">Raam Páh</td>
          <td class="table-data">Moto Véia</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
