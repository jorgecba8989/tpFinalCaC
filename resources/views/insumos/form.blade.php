@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>    
@endif

<div class="form-group">
    <label for="Nombre">Nombre del Insumo</label>
    <input type="text" class="form-control" name="Nombre" id="iNombre" value="{{isset($insumos->Nombre)?$insumos->Nombre : old('Nombre')}}"> 
    <br>
    <label for="Cantidad">Cantidad</label>
    <input type="text"  class="form-control" name="Cantidad" id="iCantidad" value="{{isset($insumos->Cantidad)?$insumos->Cantidad : old('Cantidad')}}"> 
    <br>
    <label for="Precio">Precio</label>
    <input type="text"  class="form-control" name="Precio" id="iPrecio" value="{{isset($insumos->Precio)? $insumos->Precio : old('Precio')}}"> 
    <br>
    


    <input type="submit" value="{{$modo}} datos" class="btn btn-success">
    <a href="{{url ('cliente/')}}" class="btn btn-primary">Regresar</a>

</div>