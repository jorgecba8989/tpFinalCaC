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
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="iNombre" value="{{isset($cliente->Nombre)?$cliente->Nombre : old('Nombre')}}"> 
    <br>
    <label for="Apellido">Apellido</label>
    <input type="text"  class="form-control" name="Apellido" id="iApellido" value="{{isset($cliente->Apellido)?$cliente->Apellido : old('Apellido')}}"> 
    <br>
    <label for="Nombre_usuario">Nombre_usuario</label>
    <input type="text"  class="form-control" name="Nombre_usuario" id="iNombre_usuario" value="{{isset($cliente->Nombre_usuario)? $cliente->Nombre_usuario : old('Nombre_usuario')}}"> 
    <br>
    <label for="Telefono">Telefono</label>
    <input type="text"   class="form-control" name="Telefono" id="iTelefono" value="{{isset($cliente->Telefono)?$cliente->Telefono : old('Telefono')}}">
    <br>
    <label for="Ciudad">Ciudad</label>
    <input type="text"  class="form-control" name="Ciudad" id="iCiudad" value="{{isset ($cliente->Ciudad)? $cliente->Ciudad : old('Ciudad')}}">
    <br>
    <label for="Correo">Correo</label>
    <input type="email"   class="form-control" name="Correo" id="iCorreo" value="{{isset($cliente->Correo)?$cliente->Correo : old('Correo')}}"> 
    <br>

    <label for="Foto">Foto</label>
    @if (isset($cliente->Foto))
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$cliente->Foto}}" alt="" width="60" height="60">
        
    @endif
    <input type="file"  class="form-control" name="Foto" id="iFoto" value=""> 
    <br>



    <input type="submit" value="{{$modo}} datos" class="btn btn-success">
    <a href="{{url ('cliente/')}}" class="btn btn-primary">Regresar</a>

</div>
