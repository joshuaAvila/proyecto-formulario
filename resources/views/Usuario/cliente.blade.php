@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Solicitud de Cotización</h1>    
    <div class="row justify-content-center" id="registro_formulario">   
        <div class="col-md-8">
            <form id="formulario" class="formulario">
                @csrf
                @include('Usuario.form')
            </form>
        </div>
    </div>
</div>

@endsection