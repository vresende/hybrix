<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="25">
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="25">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <button type="button" class="btn btn-sm px-3 fs-15 text-reset header-item d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <span class="bi bi-search me-2"></span> Pesquise...
                </button>
            </div>

            <div class="d-flex align-items-center">

                <div class="d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="bi bi-search fs-16"></i>
                    </button>
                </div>

                <x-layouts.top-menu>
                    <x-slot name="title">
                        <h6 class="m-0 fw-semibold fs-15">Exemplo de menu</h6>
                    </x-slot>
                    <x-slot name="content">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="{{ URL::asset('build/images/brands/dropbox.png') }}" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                    </x-slot>
                </x-layouts.top-menu>

               <x-layouts-top-menu-list-products>

               </x-layouts-top-menu-list-products>
               <x-layouts.topbar.fullscreen />
               <x-layouts.topbar.colormode />
               <x-layouts.topbar.notification />
               <x-layouts.topbar.userprofile />


            </div>
        </div>
    </div>
</header>


<!-- Modal -->
<x-layouts.topbar.search-modal />
<!-- remover notificação Modal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-4"></i>
                    </div>
                    <div class="mt-4 fs-15">
                        <h4 class="mb-1">Tem certaza?</h4>
                        <p class="text-muted mx-4 mb-0">Tem certeza de que deseja remover esta notificação?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Sim, Deletar</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
