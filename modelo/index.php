<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJETO CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/59352edfa0.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include "navbar.php"?>

    <h1 class="text-center p-3">SISTEMA CRUD</h1>
    <div class="container-fluid row">
    <form class="col-4 p-8" action="cadastro.php" method="POST">
        <h3 class="text-center text-secondary">Registro de pessoas</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome completo</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento">
  </div>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Endereço</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
<td>
        <a href="edit_script.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
   
  </tbody>
</table>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>