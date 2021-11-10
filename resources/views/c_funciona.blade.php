<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .bloque_buscador{
                width: 100%;
                padding: 5rem 1rem;
                padding-top: 4rem;
                padding-right: 1rem;
                padding-bottom: 4rem;
                padding-left: 1rem;
                margin: auto;
                margin-top: auto;
                margin-right: auto;
                margin-bottom: auto;
                margin-left: auto;
                display: flex;
                -webkit-box-pack: justify;
                justify-content: space-between;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                background-image: url(/_nuxt/img/ed6ad1c.jpg);
                background-position: 50%;
                background-size: contain;
                background-repeat: repeat;
            }

            .text_h1{
                display: inline-block;
                font-size: 30px;
                text-transform: uppercase;
                color: #fff;
                text-align: center;
            }
            .text_p{
                font-size: 16px;
                text-transform: uppercase;
                color: #fff;
                text-align: center;
            }
    
            @media screen and (max-width: 768px){
                .title {
                    font-size: 1.5rem;
                }
            }
            @media screen and (max-width: 768px){
                h3 {
                    font-size: 1.2rem;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                   
            </div>
        </nav>
        

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

        <main class="m-5">
            <h1 class="title text-uppercase text-center">¿ Cómo Funciona ?</h1>

                <div class="row">

                    <div class="col-12 col-md-4 border mt-5">
                        <div class="buscar">
                            <h3 class="text-uppercase">1. USA EL BUSCADOR</h3>
                            <p>Lo primero es dirigirte al buscador que esta en la parte superior de la web y elegir los términos de busqueda que se adaptena lo que necesitas, como puede ser la provincia en la que vives.</p>
                        </div>
                        <div class="elegir">
                            <h3 class="text-uppercase">2. ELIGE UNA MASCOTA</h3>
                            <p>Tan sencillo como eso, elije una mascota a la que quieras dar un hogar y tu compañia, pulsa en el boton “más información”.</p>
                        </div>  
                    </div>

                    <div class="col-12 col-md-4 border mt-5 align-self-center">
                        <div class="img_medio d-flex justify-content-center">
                            <img src="{{ asset('images/adop/perrito.png') }}" class="" alt="perrito">
                        </div>
                    </div>

                    <div class="col-12 col-md-4 border mt-5">
                        <div class="inform">
                            <h3 class="text-uppercase">3. LEE ATENTAMENTE SU INFORMACIÓN</h3>
                            <p>Una vez en la ficha completa puedes ver los datos detallados de cada animal, así como las condiciones específicas de su salud.</p>
                        </div>
                        <div class="formulario">
                            <h3 class="text-uppercase">4. Llena el formulario</h3>
                            <p>Llena el formulario con tus datos, pon el día y la hora en que vendrá en busca de su nueva mascota y has click en "adoptar". Te esperamos !</p>
                        </div> 
                    </div>
                    
        
                </div>
        </main>
        <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
         </footer>

    </body>
</html>
