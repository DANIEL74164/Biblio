<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Registro de Usuario Nuevo</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<div class="container">
<div class="card mb-3">
  <div class="card-header">
    <strong>Registro</strong>
  </div>
  <div class="card-body">
    <form action="<?php base_url()?> doRegister" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-5">
            <label for="codigo">Codigo de estudiante:</label>
            <input class="form-control" id="codigo" name="codigo" type="text" aria-describedby="nameHelp" placeholder="6482639">
          </div>
          <br>
        </div>
      </div>
        <div class="form-group">
          <div class="form-row">
          <div class="col-md">
            <label for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" aria-describedby="nameHelp" placeholder="Ale">
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="form-row">
          <div class="col-md">
            <label for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Gonzales">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md">
           <label for="direccion">Direccion:</label>
           <input class="form-control" id="direccion" name="direccion" type="text" aria-describedby="emailHelp" placeholder="Jr. Incas #***">
           </div>
         </div>
       </div>
        <div class="form-group">
        <div class="form-row">
         <div class="col-md">
           <label for="usuario">Usuario:</label>
            <input class="form-control" id="usuario" name="usuario" type="text" aria-describedby="emailHelp" placeholder="And125">
        </div>
         
          <div class="col-md">
            <label for="pwd">Contraseña:</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="confirmar">Confirmar:</label>
            <input class="form-control" id="confirmar" name="confirmar" type="password" placeholder="confirmar contraseña">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md">
            <label for="email">Email:</label>
            <input class="form-control" id="email" name="email" type="text" placeholder="ejemplo@">
          </div>
          <div class="col-md">
            <label for="confirmar">Telefono:</label>
            <input class="form-control" id="telefono" name="telefono" type="text" placeholder="987654321">
          </div>
        </div>
        </div>
      
      <!-- <a class="btn btn-primary" href="login.html">Register</a> -->
      <input class="btn btn-primary" type="submit" value="Guardar">
      <a class="btn btn-danger" href="<?php base_url()?> index">Cancelar
      </a>
    </form>
  </div>
</div>
</div>
</body>
</html>