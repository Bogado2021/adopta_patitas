@extends('layouts.app')

@section('content')

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

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/home')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/mascota')}}">
              <span data-feather="file"></span>
              Mascotas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/solicitud')}}">
              <span data-feather="shopping-cart"></span>
              Solicitudes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/usuario')}}">
              <span data-feather="users"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Agregar Mascotas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <div class="my-4 w-100" id="myChart" width="900" height="380">
          <div class="row">
            <form action="{{ url('/guardarmascota') }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}

              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del animal</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="animal">Tipo de animal</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Animal</option>
                  <option value="1">Perro</option>
                  <option value="2">Gato</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sexo">Sexo del animal</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Sexo</option>
                  <option value="1">Hembra</option>
                  <option value="2">Macho</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tamaño">Tamaño del animal</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Tamaño</option>
                  <option value="1">Pequeño</option>
                  <option value="2">Mediano</option>
                  <option value="3">Grande</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="edad" class="form-label">Edad aproximada del animal</label>
                <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad">
              </div>
              <div class="form-group">
                <label for="vacuna">Estado de vacunación</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Vacuna</option>
                  <option value="1">Vacuna al día</option>
                  <option value="2">Sin vacuna al día</option>
                </select>
              </div>
              <div class="form-group">
                <label for="enfermedad">Enfermedad que padece</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Enfermedad</option>
                  <option value="1">Sin niguna enfermedad</option>
                  <option value="2"></option>
                </select>
              </div>
              <div class="form-group">
                <label for="esterilizado">¿Se encuentra esterilizado?</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Esterilizado</option>
                  <option value="1">SÍ</option>
                  <option value="2">Aun no</option>
                </select>
              </div>
              <div class="form-group">
                <label for="desparasitado">¿Se encuentra desparasitado?</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Desparasitado</option>
                  <option value="1">SÍ</option>
                  <option value="2">Aun no</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto">
              </div>
              <button type="submit" class="btn btn-outline-success">Guadar</button>
              
            </form>
          </div>
      </div>

    </main>
  </div>
</div>

@endsection