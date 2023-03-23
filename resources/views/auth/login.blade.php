@extends('layout.base')

@section('title', 'Asegacar')

@section('content')
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Sistema de ingreso</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                        <p class="text-center small">Ingrese correo y contraseña</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ url('/home')}}" novalidate>

                                        @csrf

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Correo</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="email" class="form-control" id="yourEmail"
                                                       required>
                                                <div class="invalid-feedback">por favor ingrese el usuario</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Contraseña</label>
                                            <input type="password" name="password" class="form-control"
                                                   id="yourPassword" required>
                                            <div class="invalid-feedback">Ingrese la contraseña!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Recordar datos</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">No tienes una cuenta? <a
                                                    href="{{ url('register/') }}">Crear una cuenta</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

@endsection
