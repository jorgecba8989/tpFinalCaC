@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Formulario de Creacion de Insumos</h2>
    <form action="{{url('/insumos')}}" method="POST" > <!-- con enctype me va permitir enviar fotos o archivos  !--> 
        <!-- Lo de abajo es por un control de seguridad-->
        @csrf 
        @include('insumos.form', ['modo'=>'Crear'])  <!-- con esto permite reutilizar ese form -->
    </form>
@endsection