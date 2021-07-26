<?php require_once("head.php");?>

<?php require_once("header.php");?>

<div class="container mt-5">
    <h1 class="mb-5">Panel admin Clientes</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col" >Nombre</th>
                <th scope="col" >DNI</th>
                <th></th>
                <th></th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td><button type="button" class="btn btn-secondary">Modificar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            </tbody>
        </table>

        <div class="row container"  >
            <button type="button" class="btn btn-primary btn col-2" onclick="window.location.href='agregarCliente.php'">Agregar nuevo</button>
        </div>
</div>
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>