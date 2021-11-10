@extends('layouts.app')

@section('content')
<ul class="m-0 nav-link p-0 fw-bold d-flex justify-content-center">
    <a class="nav-link link-secondary" href="{{ route('login') }}">MI CUENTA</a>
</ul>
<!-- <div class="container">
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
        </div>
    </div>
</div> -->

<header>
            <nav class="bloque_buscador navbar navbar-dark bg-dark">
                    <h1 class="text_h1 text-light">La forma más fácil de adoptar</h1>
                    <p class="text_p text-light">Encuentra la mascota que necesita tu adopción</p>
                <form class="d-flex">
                    <select class="form-select me-2" id="validationCustom04" required>
                        <option disabled selected>Animal</option>
                        <option value="item 1">Perro</option>
                        <option value="item 2">Gato</option>
                        <option value="item 3">Otro</option>
                    </select>
                    <select class="form-select me-2" id="validationCustom04" required>
                        <option disabled selected>Sexo</option>
                        <option value="item 1">Macho</option>
                        <option value="item 2">Hembra</option>
                    </select>
                    <select class="form-select me-2" id="validationCustom04" required>
                        <option disabled selected>Tamaño</option>
                        <option value="item 1">Grande</option>
                        <option value="item 2">Mediano</option>
                        <option value="item 3">Pequeño</option>
                    </select>
                    
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </nav>
        </header>

        

@endsection
