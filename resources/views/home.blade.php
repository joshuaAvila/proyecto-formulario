@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}                    
                </div>
            </div>
            <a href="{{ url('/formulario_solicitud') }}" class="btn btn-info my-2">Formulario</a>
        </div>
    </div>
</div>
@endsection
