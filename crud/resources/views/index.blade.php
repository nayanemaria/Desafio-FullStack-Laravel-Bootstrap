<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta lang="pt-br">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="viewport" content="width=500, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo asset('css/jquery.dataTables.min.css')?>" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <title>CRUD | Desafio Dev</title>
</head>
<body>

@include('layouts/menu')
@include('layouts/registrar_cadastros')

  <div class="container mt-5">

    <div class="d-flex justify-content-center mt-5">
      <div class="col-12 mt-5">

         <div class="d-flex justify-content-end">
            <button type="button" class="btn more" data-bs-toggle="modal" data-bs-target="#CreateModal">Adicionar <i class="fa fa-plus"></i></button>
         </div>

         <div class="table-responsive mt-3 mb-5">

            <table class="table table-striped table-bordered mb-2" id="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @include('layouts/listar_cadastros')

            </tbody>
            </table>

        </div>


      </div>
    </div>
  </div>

    <footer class="container-fluid footer text-center text-lg-start mt-5 px-0">
                <p class="text-center pt-3">© 2023 Copyright | Nayane Maria</p>
    </footer>

  <script src="<?php echo asset('js/jquery-3.6.3.min.js')?>"></script>
  <script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
  <script src="<?php echo asset('js/modal_actions.js')?>"></script>
  <script src="<?php echo asset('js/mask.js')?>"></script>
  <script src="<?php echo asset('js/popper.min.js')?>"></script>
  <script src="<?php echo asset('js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo asset('js/dataTable.js')?>"></script>
</body>
</html>
