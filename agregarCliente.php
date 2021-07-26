<?php require_once("head.php");?>

<?php require_once("header.php");?>

<div class="container mt-5">
    <h3>Agregar Cliente</h3>
    <br>
<form class="row g-3 needs-validation" novalidate  method="post" action="adminCliente.php">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01"  required placeholder="Ingrese un nombre">
   
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationCustom02"  required placeholder="Ingrese un apellido">
    
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Nombre usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required placeholder="Ingrese un usuario">
    
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="validationCustom03" required placeholder="Ingrese una ciudad">
  
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="validationCustom04" required placeholder="Ingrese un numero telefonico">
  
  </div>

 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>