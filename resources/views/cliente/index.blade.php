<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;700&family=Shadows+Into+Light&display=swap" rel="stylesheet"><style>
  h2{
    color:red;
    font-family: 'Shadows Into Light', cursive;
  }
</style>

@extends('layouts.app')

@section('content')
<div class="container">


  @if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
      {{Session::get('mensaje')}}  
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

<h2 style="font-size: 5em;">Clientes</h2>
  <br>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Usuario</th>
          <th scope="col">Correo</th>
          <th scope="col">Ciudad</th>
          <th scope="col">Telefono</th>
          <th scope="col">Foto</th>
          <th scope="col"></th>
         
        </tr>
      </thead>

      <tbody>
          @foreach ($cliente as $c)
        <tr>
          <th scope="row">{{$c->id}}</th>
          <td>{{$c->Nombre}}</td>
          <td>{{$c->Apellido}}</td>
          <td>{{$c->Nombre_usuario}}</td>
          <td>{{$c->Correo}}</td>
          <td>{{$c->Ciudad}}</td>
          <td>{{$c->Telefono}}</td>
          <td><img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$c->Foto}}" alt="" width="60" height="60"> </td>
          <td> <a href="{{ url ('/cliente/'.$c->id.'/edit')}}" class="btn btn-warning">Editar</a> | 
            <form action="{{url('/cliente/'.$c->id)}}" method="POST" class="d-inline">
              @csrf    
              {{method_field('DELETE')}}
              <input type="submit" value="Borrar" onclick="return confirm ('Vas a eliminar el registro, deseas continuar?')" class="btn btn-danger">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!!$cliente ->links()!!}
</div>
@endsection

