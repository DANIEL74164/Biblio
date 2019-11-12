<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css') ?>" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?= base_url();?>admin/doLogin" method="post">
          <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
                  </div>
              <?php } ?>
          <div class="form-group">
            <label for="user">Usuario</label>
            <input class="form-control" name="usuario" type="usuario" aria-describedby="emailHelp" placeholder="Luis1235">
          </div>
          <div class="form-group">
            <label for="usua_password">Contraseña</label>
            <input class="form-control" name="password" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label" for="checkbox">
                <input class="form-check-input" type="checkbox" name="checkbox" id="checkbox" value="1"> Ingresar como administrador?</label>
            </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Ingresar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?= base_url() . 'register'; ?>">Registrarse</a>
          <a class="d-block small" href="#">Olvido su contraseña?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
</body>

</html>
