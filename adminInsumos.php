<?php require_once("head.php");?>

<?php require_once("header.php");?>

<div class="container mt-5">
        <h1 class="mb-5">Panel admin Insumos</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col" >Insumo</th>
                <th scope="col" >Stock</th>
                <th></th>
                <th></th>
            </tr>

            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Notebook Asus</td>
                <td>20</td>
                <td ><button type="button" class="btn btn-secondary">Modificar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            </tbody>
        </table>

        <div class="row container"  >
            <button type="button" class="btn btn-primary  btn col-2" onclick="window.location.href='agregarInsumo.php'">Agregar nuevo</button>
        </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
