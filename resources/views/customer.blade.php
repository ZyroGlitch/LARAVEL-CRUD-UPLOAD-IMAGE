@extends('layout.navbar')

@section('page-content')
    <section class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12">
                <form class="d-flex mb-3" role="search" style="width:400px;">
                    <input class="form-control me-2" type="search" placeholder="Enter Customer Firstname" aria-label="Search"
                        id="searchCustomer">
                    <button class="btn btn-success" type="button" id="searchBtn">Search</button>
                </form>

                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-light">
                        <h3>Customers</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Date Registered</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center align-middle">
                                @forelse ($fetchData as $data)
                                    <tr>
                                        <td>{{ $data->firstname }}</td>
                                        <td>{{ $data->lastname }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->created_at->format('F d, Y') }}</td>
                                        <td>
                                            <div class="d-grid">
                                                <a href="#" class="btn btn-primary">View Profile</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Records Exist!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Search Customer --}}
        <script>
            var searchBtn = document.getElementById('searchBtn');
            var searchCustomer = document.getElementById('searchCustomer');

            searchBtn.addEventListener('click', function() {
                var customer = searchCustomer.value;
                window.location.href = '{{ route('view.customer') }}?search=' + customer;
            });
        </script>
    </section>
@endsection
