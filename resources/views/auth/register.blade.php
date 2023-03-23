@extends('layout.base')

@section('title', 'Resgistrarse - Asegacar')

@section('content')
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Registro de usuarios</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Crear una cuenta</h5>

                                    </div>

                                    <form class="row g-3 needs-validation" method="post" novalidate>

                                        @csrf

                                        <div class="col-12">
                                            <label for="nombres" class="form-label">Nombre</label>
                                            <input type="text" name="nombres" class="form-control" id="nombres"
                                                   required>
                                            <div class="invalid-feedback">Por favor ingrese el nombre!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Correo</label>
                                            <input type="email" name="email" class="form-control" id="email" required>
                                            <div class="invalid-feedback">Ingrese el correo!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                   required>
                                            <div class="invalid-feedback">Por favor ingrese la contraseña de acceso!
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value=""
                                                       id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">Acepto <a href="#">terminos
                                                        y condiciones</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100" type="submit">Crear cuenta</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Tiene una cuenta? <a href="{{ url('/') }}">Ingrese
                                                    aquí</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Diseño y desarrollo <a href="https://bootstrapmade.com/">Jose Cuellar</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
