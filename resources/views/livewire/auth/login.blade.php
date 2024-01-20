@section('title')
    Login
@endsection

<section class="auth-bg-cover min-vh-100 p-4 p-lg-5 d-flex align-items-center justify-content-center">
    <div class="bg-overlay"></div>
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-xl-8 col-lg-6">
                <div class="h-100 mb-0 p-4 d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <img src="{{ asset('build/images/logo-light-full.png') }}" alt=""
                                height="32" />
                        </div>
                    </div>

                    <div class="text-white mt-4">
                        <p class="mb-0">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> {{ config('site.name') }}. Criado com <i class="mdi mdi-heart text-danger"></i> por
                            {{ config('site.author') }}
                        </p>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-xl-4 col-lg-6">
                <div class="card mb-0 py-5">
                    <div class="card-body p-4 p-sm-5 m-lg-2">
                        <div class="text-center mt-2">
                            <h5 class="text-primary fs-22">Seja bem vindo !</h5>
                            <p class="text-muted">faça o login para acessar o sistema.</p>
                        </div>
                        @if (session()->has('error'))
                            <div class="alert alert-borderless alert-danger alert-dismissible mb-2 mx-2">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-borderless alert-success alert-dismissible mb-2 mx-2">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="p-2 mt-3">
                            <form method="POST" wire:submit="submit">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" wire:model.live="email"
                                        value="{{ old('email', 'admin@themesbrand.com') }}" required autocomplete="email" autofocus placeholder="Digite seu email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="float-end">
                                        @if (Route::has('password.reset'))
                                            <a class="text-muted" href="{{ route('password.reset') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <label class="form-label" for="password-input">Senha <span
                                            class="text-danger">*</span></label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input id="password" type="password"
                                            class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                            wire:model.live="password" id="password-input" required value="12345678"
                                            autocomplete="current-password" placeholder="Enter your password">
                                        <button
                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                            type="button" id="password-addon"><i
                                                class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Lembrar-me</label>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary w-100" type="submit">Acessar</button>
                                </div>

                                <div class="mt-4 pt-2 text-center">
                                    <div class="signin-other-title">
                                        <h5 class="fs-13 mb-4 title">Acessar com</h5>
                                    </div>
                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                        <button type="button" class="btn btn-soft-primary btn-icon"><i
                                                class="ri-facebook-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-soft-danger btn-icon"><i
                                                class="ri-google-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-soft-dark btn-icon"><i
                                                class="ri-github-fill fs-16"></i></button>
                                        <button type="button" class="btn btn-soft-info btn-icon"><i
                                                class="ri-twitter-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </form>

                            <!--<div class="text-center mt-5">
                                <p class="mb-0">Ainda não tem nenh ? <a href="{{ url('register') }}"
                                        class="fw-semibold text-secondary text-decoration-underline"> Sign Up</a> </p>
                            </div> -->
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end conatiner-->
</section>
@section('script')
    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
