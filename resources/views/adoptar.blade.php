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

<div>

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    
        </div>
    </div>

</div>

        


        @endsection
