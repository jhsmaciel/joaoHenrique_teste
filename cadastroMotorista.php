<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
              <h1 class="display-4">Cadastro de Motorista</h1>
              <p>
                  Está página cadastra motorista, é necessário fornecer o nome, data de nascimento cpf e sexo, se começará ativo e o modelo do carro
              </p>  
            </div>
          </div><!--/fim textos da seção -->
        </div>
      </div>
    </section><!--/fim seção home -->

    <section class="caixa"><!--/Início seção cad -->
      <div class="container">
              <form id="formulario" method="POST" action="insert.php">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputNome">Nome</label>
                      <input type="text" class="form-control" id="inputNome" name="name"placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputModelCar">Modelo do Carro</label>
                      <input type="text" class="form-control" id="inputModelCar" name="modelCar" placeholder="Digite o modelo do carro" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputDate">Data de nascimento</label>
                      <input type="date" min="1900-12-31" max="2010-12-31" name="dataNas" class="form-control" id="inputDate" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCpf">CPF</label>
                      <input type="number" class="form-control" name="cpf" id="inputCpf" placeholder="Ex- 111.333.444-5" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputStatus">Status</label>
                      <select id="inputStatus" class="form-control" name="status" required>
                        <option selected value="true">Ativo</option>
                        <option value="false">Inativo</option>
                      </select>
                    </div>
                    <fieldset class="form-group col-md-6">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" id="masculino" value="Masculino">
                              <label class="form-check-label" for="masculino">
                                Marculino
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" id="feminino" value="Feminino">
                              <label class="form-check-label" for="feminino">
                                Feminino
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="sexo" id="outros" value="Outros" require>
                              <label class="form-check-label" for="outros">
                                Outros
                              </label>
                            </div>
                          </div>
                        </div>
                    </fieldset>
                  </div>
                  <div class="form-row">
                  <div class="col-md-11"></div>
                    <input type="submit" class="btn btn-outline-dark" onClick="javascript:validar();" value="Cadastrar">
                  </div>  
              </form>
        </div> 
    </section><!--/FIM seção cad -->

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
        <script>

          function getRadio(){
              sexo = document.getElementsByName('sexo');
              for(var i = 0; i < sexo.length; i++){
                if(sexo[i].checked){
                  return sexo[i].value;
                }
              }
            return null;
          }
          
          function validar() {
            var nome = document.getElementById("inputNome").value;
            var modelCar = document.getElementById("inputModelCar").value;
            var date = document.getElementById("inputDate").value;
            var status = document.getElementById("inputStatus").value;
            var cpf = document.getElementById("inputCpf").value;
            sexo = getRadio()
            

            if(!nome==''){
              if(!modelCar==''){
                if(!date==''){
                  if(!cpf==''){
                    if(sexo!==null){
                      console.log(nome+modelCar+date+status+cpf+sexo);
                      //alert("Cadastro efetuado com sucesso!");
                    }
                  } 
                }
              }
            }     
          }
        </script>
        

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>