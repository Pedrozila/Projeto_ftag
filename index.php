<?php
  if(isset($_POST['submit']))
  {
    header('Location: $teste.php');
  }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
      <div class="row align-items-center">
        <div class="col-md-10 mx-auto col-lg-5">
          <form action="index.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
            <div class="form-floating mb-3">
              <input type="usuário" class="form-control" id="inputUsuário" placeholder="Usuário"/>
              <label for="inputUsuário">Usuário</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="inputPassword" placeholder="Senha"/>
              <label for="inputPassword">Senha</label>
            </div>
            <div class="checkbox mb-3">
              <label>
              <input type="checkbox" value="lembrar login"> Lembrar login
              </label>
            </div>
              <button class="w-100 btn btn-lg btn-success bg-primary" type="submit">Entrar</button>
          </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>