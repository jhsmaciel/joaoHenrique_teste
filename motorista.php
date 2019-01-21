<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="img/Favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Corridas Compartilhadas</title>
  </head>
  <body>
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg-warning">
        <div class="container">
          
          <a href="index.html" class="navbar-brand">
            <img src="img/car.png" width="142" height="120">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="index.html" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="corridas.php" class="nav-link">Corridas</a>
              </li>
              <li class="nav-item">
                <a href="passageiro.php" class="nav-link">Passageiro</a>
              </li>
              <li class="nav-item">
                <a href="motorista.php" class="nav-link">Motorista</a>
              </li>
              <li>
                <div class="btn-group">
                  <button type="button" class="btn btn-warning dropdown-toggle dro-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro
                    <span class="sr-only"></span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="cadastroPassageiro.php">Cadastro Passageiro</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="cadastroMotorista.php">Cadastro Motorista</a>
                  </div>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <section id="home"><!-- Início seção home -->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex"><!-- Textos da seção -->
            <div class="align-self-center">
              <h1 class="display-4">Consulta de Motoristas</h1>
              <p>
                  Nesta página há uma table listando todos os motoristas
              </p>
            </div>
          </div><!--/fim textos da seção -->
        </div>
      </div>
    </section><!--/fim seção home-->

    <section class="caixa"><!--/Início seção saiba -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 d-flex">
            <table class="table">
              <thead class="thread">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Modelo do carro</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">Status</th>
                  <th scope="col">Sexo</th>
                  <th scope="col">CPF</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    include_once('conexao.php');
                    $stmt = $conexao->query("select idMotorista,nomeMotorista, modeloCarro, dataNascimento, status, sexo, cpfMotorista from motorista;");
                    $lista = $stmt->fetchAll();
                    $count = count($lista);
                    for ($i = 0; $i < $count; $i++){
                      $state = $lista[$i][4];
                      if ($state){
                        $state = "Ativo";
                      } else {
                        $state = "Inativo";
                      }
                      echo("<tr>
                              <th>".$lista[$i][0]."</th>
                              <td>".$lista[$i][1]."</td>
                              <td>".$lista[$i][2]."</td>
                              <td>".$lista[$i][3]."</td>
                              <td>".$state."</td>
                              <td>".$lista[$i][5]."</td>
                              <td>".$lista[$i][6]."</td>
                            </tr>"); 
                    }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </section><!--/FIM seção saiba -->

    <section class="caixa"><!--/Início seção recursos -->
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="img/facil.png" class="img-fluid">
            <h4>Fácil de usar/pagar</h4>
            <p>
              O Corridas Compartilhadas é básico e permite que você faça inúmeras corridas
            </p>
          </div>
          <div class="col-md-4">
            <img src="img/economize.png" class="img-fluid">
            <h4>Economize seu tempo</h4>
            <p>
              Tempo é dinheiro! Em estantes você chega ao seu destino!
            </p>
          </div>
          <div class="col-md-4">
            <img src="img/suporte.png" class="img-fluid">
            <h4>Suporte amigo</h4>
            <p>
              Dúvidas? Perguntas? Nosso suporte super legal ajuda você! A gente tá aqui pra resolver seus problemas e deixar sua vida bem mais fácil!
            </p>
          </div>
        </div>
      </div>
    </section><!--/FIM seção recursos -->

    <footer class="mt-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p>
              <a href="index.html">Home</a>
              <a href="corridas.php">Corridas</a>
              <a href="passageiro.php">Passageiro</a>
              <a href="motorista.php">Motorista</a>
            </p>
          </div>
          <div class="col-md-4 d-flex justify-content-end">
            <a href="" class="btn btn-outline-dark">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="btn btn-outline-dark ml-2">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>