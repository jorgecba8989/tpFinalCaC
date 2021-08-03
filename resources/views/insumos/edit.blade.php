@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar insumo</h2>

    <form action="{{ url('/insumos/'.$insumos->id) }}" method="post" >
        @csrf
        {{method_field('PATCH')}}
        
        @include('insumos.form',['modo'=>'Editar'])
    </form>
    @endsection