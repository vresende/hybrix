<div class="dropdown ms-sm-3 header-item topbar-user">
    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center">
            <img class="rounded-circle header-profile-user" src="@if(Auth::user()->avatar) {{ URL::asset('storage/images/users/'. Auth::user()->avatar) }} @else {{ URL::asset('storage/images/users/avatar-1.jpg') }} @endif" alt="{{ auth()->user()->first_name }}">
                <span class="text-start ms-xl-2">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->first_name }}</span>
                </span>
        </span>
    </button>
    <div class="dropdown-menu dropdown-menu-end">
        <!-- item-->
        <h6 class="dropdown-header">Bem Vindo {{ auth()->user()->first_name }}!</h6>
        <a class="dropdown-item" href="#!"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
       <div class="dropdown-divider"></div>
        <a class="dropdown-item " href="{{ url('logout') }}"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" key="t-logout">logout</span></a>
    </div>
</div>
