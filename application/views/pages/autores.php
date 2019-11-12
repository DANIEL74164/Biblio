<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">BiblioSis</li>
</ol>

<div class="card mb-3">
  <div class="card-header">
    <strong>Crear Autor</strong>
  </div>
  <div class="card-body">
    <form action="<?php echo site_url('pages/table') ?>">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="nombres">Nombres:</label>
            <input class="form-control" id="nombres" name="nombres" type="text" aria-describedby="nameHelp" placeholder="Ale">
          </div>
          <div class="col-md-6">
            <label for="apellidos">Apellidos:</label>
            <input class="form-control" id="apellidos" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Gonzales">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="direccion">Biografia:</label>
        <input class="form-control" id="direccion" name="direccion" type="textarea" aria-describedby="emailHelp" placeholder="Jr. Incas #***">
      </div>
      
      <!-- <a class="btn btn-primary" href="login.html">Register</a> -->
      <input class="btn btn-primary" type="submit" name="submit" value="Guardar">
      <a class="btn btn-danger" href="#">Cancelar
      </a>
    </form>
  </div>
</div>
