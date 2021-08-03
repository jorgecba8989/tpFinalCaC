@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulario de Creacion de Cliente</h2>
    <form action="{{url('/cliente')}}" method="POST" enctype="multipart/form-data"> <!-- con enctype me va permitir enviar fotos o archivos  !--> 
        <!-- Lo de abajo es por un control de seguridad-->
        @csrf 
        @include('cliente.form', ['modo'=>'Crear'])  <!-- con esto permite reutilizar ese form -->
    </form>
@endsection