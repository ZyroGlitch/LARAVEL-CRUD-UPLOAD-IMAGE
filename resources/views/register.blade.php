@extends('layout.app')

@section('content')
    <section class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-10 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body d-flex align-items-start">
                    <div class="col-lg-7 col-md-7">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/brand.png" alt="brand" class="object-fit-contain me-3"
                                style="width:30px;height:30px;">
                            <h6 class="fw-bold">SHOPIFY</h6>
                        </div>
                        <div class="text-center">
                            <img src="assets/register.svg" alt="image" class="object-fit-contain"
                                style="width:350px;height:350px;">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <form action="{{ route('db.store') }}" method="post">
                            @csrf
                            @method('post')

                            <h2 class="mb-2">Get Started</h2>
                            <h6 class="mb-4">I have already an account? <a href="{{ route('view.login') }}"
                                    style="text-decoration: none">Sign In</a></h6>
                            <label for="firstname" class="form-label fw-bold">Firstname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>

                            <label for="lastname" class="form-label fw-bold">Lastname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>

                            <label for="email" class="form-label fw-bold">Email</label>
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

                            <div class="d-grid">
                                <input type="submit" value="SIGN UP" class="btn btn-dark fw-bold">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
