<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">BiblioSis</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <strong>Registro</strong>
  </div>
  <div class="card-body">
    <form action="<?php base_url()?> Register/doRegister" method="post">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-3">
            <label for="codigo">Codigo de estudiante:</label>
            <input class="form-control" id="codigo" name="codigo" type="text" aria-describedby="nameHelp" placeholder="6482639">
          </div>
          <br>
          <div class="col-md-5">
            <label for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" aria-describedby="nameHelp" placeholder="Ale">
          </div>
          <div class="col-md-4">
            <label for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Gonzales">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input class="form-control" id="direccion" name="direccion" type="text" aria-describedby="emailHelp" placeholder="Jr. Incas #***">
      </div>
      <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input class="form-control" id="usuario" name="usuario" type="text" aria-describedby="emailHelp" placeholder="And125">
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="pwd">Contraseña:</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña">
          </div>
          <div class="col-md-6">
            <label for="confirmar">Confirmar:</label>
            <input class="form-control" id="confirmar" name="confirmar" type="password" placeholder="confirmar contraseña">
          </div>
          <div class="col-md-6">
            <label for="email">Email:</label>
            <input class="form-control" id="email" name="email" type="text" placeholder="ejemplo@">
          </div>
          <div class="col-md-6">
            <label for="confirmar">Telefono:</label>
            <input class="form-control" id="telefono" name="telefono" type="text" placeholder="987654321">
          </div>
        </div>
      </div>
      <!-- <a class="btn btn-primary" href="login.html">Register</a> -->
      <input class="btn btn-primary" type="submit" value="Guardar">
      <a class="btn btn-danger" href="#">Cancelar
      </a>
    </form>
  </div>
</div>
