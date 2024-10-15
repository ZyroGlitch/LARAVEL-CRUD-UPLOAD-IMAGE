@extends('layout.app')

@section('content')
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('view.product') }}">
                <img src="{{ asset('assets/brand.png') }}" alt="brand" class="object-fit-contain me-2"
                    style="width:40px;height:40px;">
                <h4 class="fw-bold">SHOPIFY</h4>
            </a>

            {{-- Responsive Humburger --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-5 fs-5">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('view.product') }}"><i class="bi bi-box"></i> Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('view.history') }}"><i class="bi bi-clock-history"></i>
                            History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('view.customer') }}"><i class="bi bi-person-fill"></i>
                            Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('view.addProduct') }}"><i class="bi bi-boxes"></i> Add
                            Product</a>
                    </li>
                </ul>

                <a href="{{ route('view.logout') }}" class="fw-bold text-secondary fs-5" style="text-decoration: none"><i
                        class="bi bi-box-arrow-right"></i>
                    Logout</a>
            </div>
        </div>
    </nav>

    @yield('page-content')
@endsection
