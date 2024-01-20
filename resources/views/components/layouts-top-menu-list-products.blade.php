@props([
    'title' => 'Cart',
    'total_itens' => 0,
    'total_price' => 0,
    'items' => []
])
<div class="dropdown topbar-head-dropdown ms-1 header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <i class='bi bi-bag fs-18'></i>
        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">{{ $total_itens }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 fs-16 fw-semibold">{{ $title }}</h6>
                </div>
                <div class="col-auto">
                    <span class="badge text-warning bg-warning-subtle fs-13">
                        <span class="cartitem-badge">{{ $total_itens }}</span>
                    items</span>
                </div>
            </div>
        </div>
        <div data-simplebar style="max-height: 300px;">
            <div class="p-2">
               @if($total_itens === 0)
                    <div class="text-center empty-cart" id="">
                        <div class="avatar-md mx-auto my-3">
                            <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                <i class='bx bx-cart'></i>
                            </div>
                        </div>
                        <h5 class="mb-3">Your Cart is Empty!</h5>
                        <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                    </div>
                @else
                <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                    <div class="d-flex align-items-center">
                        <img src="{{ URL::asset('build/images/products/img-1.png') }}" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                        <div class="flex-grow-1">
                            <h6 class="mt-0 mb-1 fs-14">
                                <a href="#!" class="text-reset">Branded
                                    T-Shirts</a>
                            </h6>
                            <p class="mb-0 fs-13 text-muted">
                                Quantity: <span>10 x $32</span>
                            </p>
                        </div>
                        <div class="px-2">
                            <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                        </div>
                        <div class="ps-2">
                            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
            <div class="d-flex justify-content-between align-items-center pb-3">
                <h5 class="m-0 text-muted">Total:</h5>
                <div class="px-2">
                    <h5 class="m-0" id="cart-item-total">R$ {{ $total_itens }}</h5>
                </div>
            </div>

            <a href="#!" class="btn btn-success text-center w-100">
                Checkout
            </a>
        </div>
    </div>
</div>
