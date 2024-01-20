@props(['notification_total' => 0, 'notification_unread' => 0, 'notification_mesasge' => 'Sem novas notificações'])

    <article class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <i class='bi bi-bell fs-18'></i>
            <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span class="notification-badge">{{ $notification_unread }}</span><span class="visually-hidden">Mensagens não lidas</span></span>
        </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

            <div class="dropdown-head rounded-top">
                <div class="p-3 border-bottom border-bottom-dashed">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0 fs-16 fw-semibold"> Notificações <span class="badge text-danger  bg-danger-subtle fs-13 notification-badge">{{ $notification_total }}</span></h6>
                            <p class="fs-14 text-muted mt-1 mb-0">Você tem <span class="fw-semibold notification-unread">{{ $notification_unread }}</span> mensagens não lidas</p>
                        </div>
                        <div class="col-auto dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-14"><i class="bi bi-three-dots-vertical"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Limpar todas</a></li>
                                <li><a class="dropdown-item" href="#">Marcar todas como lidas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="py-2 ps-2" id="notificationItemsTabContent">
                <div data-simplebar style="max-height: 300px;" class="pe-2">
                    <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">Novas</h6>

                    <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                        <div class="d-flex">
                            <div class="avatar-xs me-3 flex-shrink-0">
                            <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                <i class='bx bx-message-square-dots'></i>
                            </span>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-2 fs-14 lh-base">{{ $notification_mesasge }}</h6>

                                </a>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                    <label class="form-check-label" for="all-notification-check03"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notification-actions" id="notification-actions">
                    <div class="d-flex text-muted justify-content-center align-items-center">
                        <div id="select-content" class="text-body fw-semibold px-1">0</div> Mensagens selecionada(s) <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remover</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
