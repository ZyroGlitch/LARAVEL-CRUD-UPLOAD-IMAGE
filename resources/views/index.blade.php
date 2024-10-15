@extends('layout.app')

@section('content')
    <section class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-5 col-md-5">
            <div class="card shadow-sm">
                <div class="card-body p-3">
                    <form action="{{ route('db.checkAuth') }}" method="post">
                        @csrf
                        @method('post')

                        <div class="text-center mb-3">
                            <img src="assets/brand.png" alt="brand" class="object-fit-contain mb-2"
                                style="width:100px;height:100px;">
                            <h4 class="fw-bold">SHOPIFY</h4>
                        </div>

                        <label for="email" class="form-label fw-semibold">Email</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <label for="password" class="form-label fw-semibold">Password</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="bi bi-shield-lock-fill"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword"
                                data-bs-toggle="tooltip" data-bs-placement="right" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Show / Hide Password.">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                        </div>

                        <div class="d-grid mb-3">
                            <input type="submit" value="SIGN IN" class="btn btn-dark fw-bold">
                        </div>

                        <div class="text-center">
                            <h6>I don't have an account? <a href="{{ route('view.register') }}" class="fw-bold"
                                    style="text-decoration: none">Sign
                                    Up</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if (session('status'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Incorrect Username or Password!',
                });
            });
        </script>
    @endif

    {{-- CDN Imports for tooltip --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });

        // Password toggle functionality
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('bi-eye-fill');
            this.querySelector('i').classList.toggle('bi-eye-slash-fill');
        });
    </script>
@endsection
