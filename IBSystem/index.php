<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IBSystem</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/projeto.css" rel="stylesheet">
  </head>
  <body>
    <h1>Cadastro</h1>
    <div class= "formulario">
        <form>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Maria">
            </div>
            <div class="form-group">
                <label>Endereço de email</label>
                <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            </div>
            <div class="form-group">
                <label>Observação</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
    <div class='box_info'>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Excluir</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Observação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">
                    <button type="button" class="btn btn-light">Light</button>
                </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>