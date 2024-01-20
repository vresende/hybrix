@extends('layouts.layouts-detached')
@section('title') @lang('translation.dashboards') @endsection
@section('content')


<div class="row">
    <div class="col">

        <div class="h-100">
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Total Earnings</p>
                                            <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value" data-target="745.35">0</span></h4>
                                            <div class="d-flex align-items-center gap-2">
                                                <h5 class="text-success fs-12 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +18.30 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-success-subtle rounded fs-3">
                                                <i class="bx bx-dollar-circle text-success"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                                <div class="animation-effect-6 text-success opacity-25 fs-18">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="animation-effect-4 text-success opacity-25 fs-18">
                                    <i class="bi bi-currency-pound"></i>
                                </div>
                                <div class="animation-effect-3 text-success opacity-25 fs-18">
                                    <i class="bi bi-currency-euro"></i>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-12 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle rounded fs-3">
                                                <i class="bx bx-shopping-bag text-info"></i>
                                            </span>
                                        </div>
                                        <div class="text-end flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Orders</p>
                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="698.36">0</span>k </h4>
                                            <div class="d-flex align-items-center justify-content-end gap-2">
                                                <h5 class="text-danger fs-12 mb-0">
                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -2.74 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                                <div class="animation-effect-6 text-info opacity-25 left fs-18">
                                    <i class="bi bi-handbag"></i>
                                </div>
                                <div class="animation-effect-4 text-info opacity-25 left fs-18">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <div class="animation-effect-3 text-info opacity-25 left fs-18">
                                    <i class="bi bi-bag-check"></i>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-12 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="flex-grow-1">
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Customers</p>
                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="183.35">0</span>M </h4>
                                            <div class="d-flex align-items-center gap-2">
                                                <h5 class="text-success fs-12 mb-0">
                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                </h5>
                                                <p class="text-muted mb-0">than last week</p>
                                            </div>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                <i class="bx bx-user-circle text-warning"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                                <div class="animation-effect-6 text-warning opacity-25 fs-18">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div class="animation-effect-4 text-warning opacity-25 fs-18">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                                <div class="animation-effect-3 text-warning opacity-25 fs-18">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-secondary btn-sm">
                                    1Y
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-header p-0 border-0 bg-light-subtle">
                            <div class="row g-0 text-center">
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                        <p class="text-muted mb-0">Orders</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                        <p class="text-muted mb-0">Earnings</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                        <p class="text-muted mb-0">Refunds</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6 col-sm-3">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                        <p class="text-muted mb-0">Conversation Ratio</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body p-0 pb-2">
                            <div class="w-100">
                                <div id="customer_impression_charts" data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <!-- card -->
                    <div class="card bg-info-subtle text-info border-0">
                        <div class="card-body">
                            <div class="row gy-3">
                                <div class="col-sm">
                                    <h5 class="card-title fs-17">Need More Sales?</h5>
                                    <p class="mb-0">Upgrade to pro for added benefits.</p>
                                </div>
                                <div class="col-sm-auto">
                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-markup-line label-icon align-middle rounded-pill fs-16 me-2"></i> Upgrade Account</button>
                                </div>
                            </div>
                            <div class="position-absolute top-0 start-50 mt-2 opacity-25">
                                <i class="bi bi-shop display-4"></i>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold text-uppercase fs-12">Sort by:
                                        </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Yesterday</a>
                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                        <a class="dropdown-item" href="#">This Month</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Purchase ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">OrderDate</th>
                                            <th scope="col">Vendor</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010331</a>
                                            </td>
                                            <td>
                                                Macbook Pro
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Terry White</div>
                                                </div>
                                            </td>
                                            <td>
                                                $658.00
                                            </td>
                                            <td>28 Oct, 2022</td>
                                            <td>Brazil</td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010332</a>
                                            </td>
                                            <td>
                                                Borosil Paper Cup
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Daniel Gonzalez</div>
                                                </div>
                                            </td>
                                            <td>
                                                $345.00
                                            </td>
                                            <td>29 Oct, 2022</td>
                                            <td>Namibia</td>
                                            <td>
                                                <span class="badge text-danger  bg-danger-subtle">Unpaid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010333</a>
                                            </td>
                                            <td>
                                                Stillbird Helmet
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Stephen Bird</div>
                                                </div>
                                            </td>
                                            <td>
                                                $80.00
                                            </td>
                                            <td>30 Oct, 2022</td>
                                            <td>USA</td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010334</a>
                                            </td>
                                            <td>
                                                Bentwood Chair
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Ashley Silva</div>
                                                </div>
                                            </td>
                                            <td>
                                                $349.99
                                            </td>
                                            <td>31 Oct, 2022</td>
                                            <td>Argentina</td>
                                            <td>
                                                <span class="badge text-warning bg-warning-subtle">Pending</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010335</a>
                                            </td>
                                            <td>
                                                Apple Headphone
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Scott Wilson</div>
                                                </div>
                                            </td>
                                            <td>
                                                $264.37
                                            </td>
                                            <td>01 Nov, 2022</td>
                                            <td>Jersey</td>
                                            <td>
                                                <span class="badge text-danger  bg-danger-subtle">Unpaid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010336</a>
                                            </td>
                                            <td>
                                                Smart Watch for Man's
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Heather Jimenez</div>
                                                </div>
                                            </td>
                                            <td>
                                                $741.98
                                            </td>
                                            <td>02 Nov, 2022</td>
                                            <td>Spain</td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center mt-4 pt-2 gy-2 text-center text-sm-start">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">25</span> Results
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center justify-content-sm-start">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="swiper selling-product">
                        <div class="d-flex pt-2 pb-4">
                            <h5 class="card-title fs-16 mb-1">Best Selling Products</h5>
                        </div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="max-width: 280px;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="bg-info-subtle rounded py-3">
                                            <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                        <div class="pt-3">
                                            <span class="float-end">4.7 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-body mb-3">$64.21</h5>
                                            <a href="#!" class="stretched-link">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Rockerz 550 Over Ear Bluetooth Headphones</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="max-width: 280px;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="bg-warning-subtle rounded py-3">
                                            <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                        <div class="pt-3">
                                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-body mb-3">$154.78</h5>
                                            <a href="#!" class="stretched-link">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Monte Carlo Sweaters</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="max-width: 280px;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="bg-primary-subtle rounded py-3">
                                            <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                        <div class="pt-3">
                                            <span class="float-end">4.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-body mb-3">$36.97</h5>
                                            <a href="#!" class="stretched-link">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">Men's Running Shoes Active Grip</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="max-width: 280px;">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="bg-success-subtle rounded py-3">
                                            <img src="{{ URL::asset('build/images/products/img-5.png') }}" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                        <div class="pt-3">
                                            <span class="float-end">4.8 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="text-body mb-3">$71.34</h5>
                                            <a href="#!" class="stretched-link">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">United Colors Of Benetton</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title flex-grow-1 mb-0">Product Delivery</h5>
                            <a href="#!" class="flex-shrink-0">View All <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                        </div>
                        <div class="card-body px-0">
                            <div data-simplebar style="max-height: 320px;">
                                <div class="vstack gap-3 px-3">
                                    <div class="p-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate">Men's Running Shoes Activ... </h6>
                                                <p class="text-truncate mb-0">by: <span class="text-info">Aaron Bauer</span></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="badge text-warning bg-warning-subtle">Shipping</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/products/img-4.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate">Striped Baseball Cap</h6>
                                                <p class="text-truncate mb-0">by: <span class="text-info">Jansh Brown</span></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="badge text-success  bg-success-subtle">Delivered</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/products/img-3.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate">350 ml Glass Groce...</h6>
                                                <p class="text-truncate mb-0">by: <span class="text-info">Scott Wilson</span></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="badge text-danger  bg-danger-subtle">Out of Delivery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate">Monte Carlo Sweaters</h6>
                                                <p class="text-truncate mb-0">by: <span class="text-info">Daniel Gonzalez</span></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="badge text-success  bg-success-subtle">Delivered</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                <img src="{{ URL::asset('build/images/products/img-9.png') }}" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h6 class="text-truncate">Ceramic Coffee Mug</h6>
                                                <p class="text-truncate mb-0">by: <span class="text-info">Stephen Garrison</span></p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <span class="badge text-warning bg-warning-subtle">Shipping</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sales by Category</h4>
                            <div class="flex-shrink-0">
                                <div class="dropdown card-header-dropdown">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Download Report</a>
                                        <a class="dropdown-item" href="#">Export</a>
                                        <a class="dropdown-item" href="#">Import</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="multiple_radialbar" data-colors='["--tb-primary", "--tb-info", "--tb-success", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div> <!-- .card-->
                </div> <!-- .col-->

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Stock Report</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-info btn-sm">
                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-borderless table-centered table-hover align-middle table-nowrap mb-0">
                                    <thead class=" table-light">
                                        <tr>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Updated Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Stock Status</th>
                                            <th scope="col">Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#00541</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Rockerz Ear Bluetooth Headphones</div>
                                                </div>
                                            </td>
                                            <td>16 Aug, 2022</td>
                                            <td>
                                                <span class="text-secondary">$658.00</span>
                                            </td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">In Stock</span>
                                            </td>
                                            <td>15 PCS</td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#07484</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-5.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">United Colors Of Benetton</div>
                                                </div>
                                            </td>
                                            <td>05 Sep, 2022</td>
                                            <td>
                                                <span class="text-secondary">$145.00</span>
                                            </td>
                                            <td>
                                                <span class="badge text-warning bg-warning-subtle">Low Stock</span>
                                            </td>
                                            <td>05 PCS</td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#01641</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-4.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Striped Baseball Cap</div>
                                                </div>
                                            </td>
                                            <td>28 Sep, 2022</td>
                                            <td>
                                                <span class="text-secondary">$215.00</span>
                                            </td>
                                            <td>
                                                <span class="badge text-danger  bg-danger-subtle">Out of Stock</span>
                                            </td>
                                            <td>0 PCS</td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#00065</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-3.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">350 ml Glass Grocery Container</div>
                                                </div>
                                            </td>
                                            <td>02 Oct, 2022</td>
                                            <td>
                                                <span class="text-secondary">$79.99</span>
                                            </td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">In Stock</span>
                                            </td>
                                            <td>37 PCS</td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#00156</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-2.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">One Seater Sofa</div>
                                                </div>
                                            </td>
                                            <td>11 Oct, 2022</td>
                                            <td>
                                                <span class="text-secondary">$264.99</span>
                                            </td>
                                            <td>
                                                <span class="badge text-success  bg-success-subtle">In Stock</span>
                                            </td>
                                            <td>23 PCS</td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#09102</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/images/products/img-8.png') }}" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Men's Running Shoes Active Grip</div>
                                                </div>
                                            </td>
                                            <td>19 Nov, 2022</td>
                                            <td>
                                                <span class="text-secondary">$264.99</span>
                                            </td>
                                            <td>
                                                <span class="badge text-warning bg-warning-subtle">Low Stock</span>
                                            </td>
                                            <td>23 PCS</td>
                                        </tr><!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .card-->
                </div> <!-- .col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-12">
                    <!-- card -->
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Top Retail Sales Location</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    Export Report
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <!-- card body -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-8">
                                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 420px"></div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <h6 class="text-muted mb-3 fw-medium fs-12 text-uppercase">All Users Statistics</h6>
                                        <h4>1,87,42,102 <small class="text-muted fw-normal fs-13">users</small></h4>
                                    </div>
                                    <div>
                                        <p class="mb-2 fw-medium">Current Activity</p>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" aria-label="Segment three" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment three" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary" role="progressbar" aria-label="Segment three" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-dark" role="progressbar" aria-label="Segment three" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning" role="progressbar" aria-label="Segment three" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-light" role="progressbar" aria-label="Segment three" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <p><i class="ri-checkbox-blank-circle-fill text-primary align-bottom me-1"></i> Canada <span class="float-end">8%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-success align-bottom me-1"></i>Greenland <span class="float-end">20%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-info align-bottom me-1"></i>US <span class="float-end">14%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-secondary align-bottom me-1"></i>Russia <span class="float-end">25%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-danger align-bottom me-1"></i>Brazil <span class="float-end">7%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-body align-bottom me-1"></i>Sydney <span class="float-end">10%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-warning align-bottom me-1"></i>Norway<span class="float-end">2%</span></p>
                                        <p><i class="ri-checkbox-blank-circle-fill text-light align-bottom me-1"></i>China <span class="float-end">14%</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>

        </div> <!-- end .h-100-->

    </div> <!-- end col -->

    <div class="col-auto layout-rightside-col">
        <div class="overlay"></div>
        <div class="layout-rightside">
            <div class="card h-100 rounded-0">
                <div data-simplebar class="widget-userlist">
                    <div class="card-body pb-0">
                        <p class="text-muted text-uppercase fw-medium fs-13">Recent Chat</p>
                        <ul class="hstack gap-2 chat-panel-list list-unstyled">
                            <li>
                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                    <div class="chat-user-img online">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Ashley Silva</p>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                    <div class="chat-user-img online">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Misty Taylor</p>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                    <div class="chat-user-img away">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Scott Wilson</p>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                    <div class="chat-user-img online">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Patricia Wilson</p>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                    <div class="chat-user-img away">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                        <span class="user-status"></span>
                                    </div>
                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Allyson Wigfall</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="search-box flex-grow-1">
                                <input type="text" class="form-control" id="searchResultList" autocomplete="off" placeholder="Search for ...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="chat-panel-list list-group list-group-flush mb-0 border-dashed">
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Ashley Silva</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Good Morning</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-1 text-muted fs-12">04:32 PM</p>
                                        <span class="badge text-info bg-info-subtle rounded-circle fs-10">4</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Misty Taylor</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Okay, Byy</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-1 text-muted fs-12">02:49 PM</p>
                                        <span class="badge text-info bg-info-subtle rounded-circle fs-10">1</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Scott Wilson</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Yeah everything is fine...</p>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-1 text-muted fs-12">12:04 PM</p>
                                        <span class="badge text-info bg-info-subtle rounded-circle fs-10">8</span>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Patricia Wilson</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey! there I'm available</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">11:11 AM</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Allyson Wigfall</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">I've finished it! See you so</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">09:24 AM</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Martha Griffin</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Wow that's great</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Mark Sargent</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Nice to meet you</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Ray Stricklin</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey, Hi Ray Stricklin ...!</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-9.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Frank Taylor</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Happy holiday 🙂</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">15/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Karla Basso</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Okay, Sure.</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">14/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Sally McPherson</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Thanks</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">14/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Lizzie Beil</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Our next meeting tomorrow at 10.00 AM</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">13/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Mark Williams</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">See you tomorrow</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">12/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Vina Scott</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Yeah everything is fine...</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">11/11</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="flex-shrink-0 me-2">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mb-1 chatlist-user-name">Keli Henry</h6>
                                        </a>
                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Good afternoon</p>
                                    </div>
                                    <div class="text-end align-self-start">
                                        <p class="mb-1 text-muted fs-12">11/11</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-user-chatlist">
                    <div class="chat-topbar p-4 border-bottom border-bottom-dashed">
                        <div class="align-items-center d-flex">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                            <div class="avatar-xs">
                                                <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-circle img-fluid userprofile" alt="">
                                                <span class="user-status"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-14 mb-0 profile-username">Ashley Silva</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="d-flex align-items-start gap-2">
                                    <div class="dropdown">
                                        <a class="btn btn-ghost-secondary btn-sm fs-16" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-more-2-fill"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="bi bi-archive text-muted me-2"></i> Archive</a>
                                            <a class="dropdown-item" href="#"><i class="bi bi-mic-mute text-muted me-2"></i> Muted</a>
                                            <a class="dropdown-item" href="#"><i class="bi bi-trash3 text-muted me-2"></i> Delete</a>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-soft-danger btn-sm fs-16" id="close-chatlist"><i class="ri-close-fill"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end chat-topbar -->
                    <div class="card-body p-0">
                        <div>
                            <div id="users-chat">
                                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar>
                                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="chat-avatar">
                                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                                </div>
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Good morning 😊</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- chat-list -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- chat-list -->

                                        <li class="chat-list left">
                                            <div class="conversation-list">
                                                <div class="chat-avatar">
                                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                                </div>
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Yeah everything is fine.</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- chat-list -->

                                        <li class="chat-list right">
                                            <div class="conversation-list">
                                                <div class="user-chat-content">
                                                    <div class="ctext-wrap">
                                                        <div class="ctext-wrap-content">
                                                            <p class="mb-0 ctext-content">Wow that's great</p>
                                                        </div>
                                                        <div class="dropdown align-self-start message-box-drop">
                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- chat-list -->

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative p-4 border-top border-top-dashed">
                        <form class="chat-form" autocomplete="off">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" id="chat-input" class="form-control border-light bg-light" placeholder="Enter Message...">
                                        <div class="chat-input-feedback">
                                            Please enter a message
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i></button>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end .rightbar-->
    </div> <!-- end col -->
</div>

@endsection
@section('script')
    <!--<script src="{{ URL::asset('build/js/app.js') }}"></script>->
@endsection
