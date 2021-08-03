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


<h2 style="font-size: 5em;">Insumos</h2>
<br>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Insumo</th>
          <th scope="col">Stock</th>
          <th scope="col">Precio</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
          @foreach ($insumos as $i)
        <tr>
          <th scope="row">{{$i->id}}</th>
          <td>{{$i->Nombre}}</td>
          <td>{{$i->Cantidad}}</td>
          <td>${{$i->Precio}}</td>
          <td> <a href="{{ url ('/insumos/'.$i->id.'/edit')}}" class="btn btn-warning">Editar</a> | 
            <form action="{{url('/insumos/'.$i->id)}}" method="POST" class="d-inline">
              @csrf    
              {{method_field('DELETE')}}
              <input type="submit" value="Borrar" onclick="return confirm ('Vas a eliminar el registro, deseas continuar?')" class="btn btn-danger">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!!$insumos ->links()!!}
</div>
@endsection
