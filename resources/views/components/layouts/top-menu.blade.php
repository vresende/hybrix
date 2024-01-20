<section class="dropdown topbar-head-dropdown ms-1 header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class='bi bi-grid fs-18'></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 fw-semibold fs-15">{{ $title }}</h6>
                </div>
            </div>
        </div>

        <div class="p-2">
            <div class="row g-0">
                {{ $content }}
            </div>
        </div>
    </div>
</section>
