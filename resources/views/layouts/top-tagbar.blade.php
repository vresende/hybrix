<div class="top-tagbar">
    <div class="w-100">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-9">
                <div class="text-white-50 fs-13">
                    <i class="bi bi-clock align-middle me-2"></i> <span id="current-time"></span>
                </div>
            </div>
            <div class="col-md-auto col-6 d-none d-lg-block">
                <div class="d-flex align-items-center justify-content-center gap-3 fs-13 text-white-50">
                    <div>
                        <i class="bi bi-envelope align-middle me-2"></i> {{ config('site.email_support') }}
                    </div>
                    <div>
                        <i class="bi bi-globe align-middle me-2"></i> {{ config('site.domain') }}
                    </div>
                </div>
            </div>
            <div class="col-md-auto col-3">
                <div class="dropdown topbar-head-dropdown topbar-tag-dropdown justify-content-end">
                    <button type="button" class="btn btn-icon btn-topbar rounded-circle text-white-50 fs-13" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @switch(Session::get('lang'))
                        @case('pt-BR')
                        <img src="{{ URL::asset('build/images/flags/br.svg') }}" class="me-2 rounded-circle" alt="Header Language" height="20"> <span id="lang-name">Português</span>
                        @break
                            @case('en')
                        <img src="{{ URL::asset('build/images/flags/ae.svg') }}" class="me-2 rounded-circle" alt="Header Language" height="20"> <span id="lang-name">English<</span>
                        @break
                        @default
                                <img src="{{ URL::asset('build/images/flags/br.svg') }}" class="me-2 rounded-circle" alt="Header Language" height="20"> <span id="lang-name">Português</span>
                        @endswitch
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">


                        <!-- item-->
                        <a href="{{ url('index/en') }}" class="dropdown-item notify-item language py-2" data-lang="en" title="Português">
                            <img src="{{ URL::asset('build/images/flags/br.svg') }}" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">Português</span>
                        </a>
                        <!-- item-->
                        <a href="{{ url('index/en') }}" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                            <img src="{{ URL::asset('build/images/flags/us.svg') }}" alt="user-image" class="me-2 rounded-circle" height="18">
                            <span class="align-middle">English</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
