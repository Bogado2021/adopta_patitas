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
        </style>
    </head>
    <body>
        <div class="d-flex justify-content-center">
            <div class="">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}" class="p-0 d-flex justify-content-center">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a class="nav-link p-0 link-secondary d-flex justify-content-center fw-bold" href="{{ url('/c_funciona') }}">¿CÓMO FUNCIONA?</a>
            </div>
        </div>
        

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

        <main>

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row mt-5 d-flex justify-content-between ">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ asset('images/adop/lui.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Más Información</a>
                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

                </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </main>

    </body>
</html>
