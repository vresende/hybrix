@extends('layouts.master-without-nav')
@section('title')
    @lang('translation.signup')
@endsection
@section('content')
    <section
        class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <div class="auth-card card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden">
                                        <div class="card-body p-4 d-flex justify-content-between flex-column">
                                            <div class="auth-image">
                                                <img src="{{ URL::asset('build/images/logo-light-full.png') }}" alt="" height="26" />
                                                <img src="{{ URL::asset('build/images/effect-pattern/auth-effect-2.png') }}" alt=""
                                                    class="auth-effect-2" />
                                                <img src="{{ URL::asset('build/images/effect-pattern/auth-effect.png') }}" alt=""
                                                    class="auth-effect" />
                                                <img src="{{ URL::asset('build/images/effect-pattern/auth-effect.png') }}" alt=""
                                                    class="auth-effect-3" />
                                            </div>

                                            <div>
                                                <h3 class="text-white">Comece sua jornada conosco..</h3>
                                                <p class="text-white-75 fs-15"></p>
                                            </div>
                                            <div class="text-center text-white-75">
                                                <p class="mb-0">&copy;
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> {{ config('site.name') }}. Criado com
                                                    <i class="mdi mdi-heart text-danger"></i> por {{ config('site.author') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-7">
                                    <div class="card mb-0 border-0 py-3 shadow-none">
                                        <div class="card-body px-0 p-sm-5 m-lg-4">
                                            <div class="text-center mt-2">
                                                <h5 class="text-primary fs-20">Criar conta</h5>
                                                <p class="text-muted">Obtenha sua conta na {{ config('site.name') }}</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form class="needs-validation" novalidate method="POST"
                                                    action="{{ route('register') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="useremail" class="form-label">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" id="useremail"
                                                            placeholder="Enter email address" required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="invalid-feedback">
                                                           Digite seu email
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Usuário <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}" id="username"
                                                            placeholder="usuário" required>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="invalid-feedback">
                                                            Por favor digite seu usuário
                                                        </div>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="password-input" class="form-label">Senha <span
                                                                class="text-danger">*</span></label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                                name="password" onpaste="return false"
                                                                placeholder="Digite a senha" id="password-input" required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <p class="mb-0 fs-12 text-muted fst-italic">Ao se registrar você concorda com o {{ config('site.name') }}<a href="#"
                                                                class="text-primary text-decoration-underline fst-normal fw-medium">
                                                                Termos de uso</a></p>
                                                    </div>

                                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                        <h5 class="fs-13">A senha deve conter:</h5>
                                                        <p id="pass-length" class="invalid fs-12 mb-2">Mínimo <b>8
                                                                carácteres</b></p>
                                                        <p id="pass-lower" class="invalid fs-12 mb-2">Em caixa <b>baixa</b>
                                                            (a-z)</p>
                                                        <p id="pass-upper" class="invalid fs-12 mb-2">Em caixa
                                                            <b>alta</b> (A-Z)
                                                        </p>
                                                        <p id="pass-number" class="invalid fs-12 mb-0">Pelo menos um <b>número</b>
                                                            (0-9)</p>
                                                    </div>

                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">
                                                            Inscreva-se
                                                        </button>
                                                    </div>

                                                    <div class="mt-4 text-center">
                                                        <div class="signin-other-title">
                                                            <h5 class="fs-13 mb-4 title text-muted">Criar conta com</h5>
                                                        </div>

                                                        <div>
                                                            <button type="button"
                                                                class="btn btn-soft-primary btn-icon "><i
                                                                    class="ri-facebook-fill fs-16"></i></button>
                                                            <button type="button"
                                                                class="btn btn-soft-danger btn-icon "><i
                                                                    class="ri-google-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-soft-dark btn-icon "><i
                                                                    class="ri-github-fill fs-16"></i></button>
                                                            <button type="button" class="btn btn-soft-info btn-icon "><i
                                                                    class="ri-twitter-fill fs-16"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Já tem uma conta ?
                                                    <a href="auth-signin-basic" class="fw-semibold text-primary text-decoration-underline">
                                                        Entrar
                                                    </a>
                                                </p>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
@section('script')
    <script src="{{ URL::asset('build/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/passowrd-create.init.js') }}"></script>
@endsection
