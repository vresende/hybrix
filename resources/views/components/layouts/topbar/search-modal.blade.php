<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content rounded">
                <div class="modal-header p-3">
                    <div class="position-relative w-100">
                        <input type="text" class="form-control form-control-lg border-2" placeholder="Pesquise..." autocomplete="off" id="search-options" value="">
                        <span class="bi bi-search search-widget-icon fs-17"></span>
                        <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Limpar</a>
                    </div>
                </div>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                    <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                        <div class="list-group list-group-flush">
                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>hybrix.psd</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>hybrix.zip</span></a>
                            </div>

                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                            </div>

                            <div class="notification-group-list">
                                <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                        <div>
                                            <h6 class="mb-0">Ayaan Bowen</h6>
                                            <span class="fs-13 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                        <div>
                                            <h6 class="mb-0">Alexander Kristi</h6>
                                            <span class="fs-13 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2" />
                                        <div>
                                            <h6 class="mb-0">Alan Carla</h6>
                                            <span class="fs-13 text-muted">React Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

