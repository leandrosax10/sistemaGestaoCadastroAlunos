<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="https://www.rj.senac.br/wp-content/themes/senac-def/images/favicon-32x32.png" sizes="32x32">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>Sistema de Gestão de Alunos</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/em -->
      <a class="navbar-brand" href="#"><strong style="color: #ff8300">SGA</strong> <em style="color: #001dff">Senac</em></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="index.php?page=form_cadastro">Registrar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Localizar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?page=form_busca">Buscar por matricula</a>
              <a class="dropdown-item" href="index.php?page=lista">Listar alunos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Editar</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Informa a matricula" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </header>
  <div class="container">
    <?php
      if(isset($_GET['page']) && $_GET['page'] !== '') {
        include $_GET['page'] . '.php';
      } else {
        include 'form_login.php';
      }
     ?>
  </div>
  <footer>
    <nav class="navbar navbar-nav fixed-bottom navbar-dark mx-auto bg-dark">
      <a class="navbar-brand" href="rj.senac.br">
        <img src="https://www.rj.senac.br/wp-content/themes/senac-def/images/favicon-32x32.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong>Senac Rio</strong>
      </a>
    </nav>
  </footer>

  <!-- Optional Java -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>
</html>
