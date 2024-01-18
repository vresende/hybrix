@extends('layouts.master-without-nav')
@section('title')
@lang('translation.logout')
@endsection
@section('content')

        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-0">
                                    <div class="col-lg-5">
                                        <div class="card auth-card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden">
                                            <div class="card-body p-4 d-flex justify-content-between flex-column">
                                                <div class="auth-image">
                                                    <img src="{{ URL::asset('build/images/logo-light-full.png') }}" alt="" height="26" />
                                                    <img src="{{ URL::asset('build/images/effect-pattern/auth-effect-2.png') }}" alt="" class="auth-effect-2" />
                                                    <img src="{{ URL::asset('build/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect" />
                                                    <img src="{{ URL::asset('build/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect-3" />
                                                </div>
        
                                                <div>
                                                    <h3 class="text-white">Start your journey with us.</h3>
                                                    <p class="text-white-75 fs-15">It brings together your tasks, projects, timelines, files and more</p>
                                                </div>
                                                <div class="text-center text-white-75">
                                                    <p class="mb-0">&copy;
                                                        <script>document.write(new Date().getFullYear())</script> Hybrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-7">
                                        <div class="card mb-0 border-0 shadow-none">
                                            <div class="card-body px-0 p-sm-5 m-lg-4 text-center">
                                                <div class="display-4 text-primary">
                                                    <i class="bi bi-box-arrow-right"></i>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <h5 class="fs-18">You are Logged Out</h5>
                                                    <p class="text-muted">Thank you for using <span class="fw-semibold">hybrix</span> admin template</p>
                                                    <div class="mt-4">
                                                        <a href="auth-signin-basic" class="btn btn-primary w-100">Sign In</a>
                                                    </div>
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