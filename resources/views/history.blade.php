@extends('layout.navbar')

@section('page-content')
    <section class="container" style="height: calc(100vh - 50.219px);">
        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
            <div class="col-lg-12 col-md-12">
                <select class="form-select mb-4" id="filterHistory" style="width:300px;">
                    <option value="All" {{ request()->query('filter') == 'All' ? 'selected' : '' }}>All</option>
                    <option value="Legion" {{ request()->query('filter') == 'Legion' ? 'selected' : '' }}>Legion</option>
                    <option value="MacBook" {{ request()->query('filter') == 'MacBook' ? 'selected' : '' }}>MacBook</option>
                    <option value="ASUS Vivobook" {{ request()->query('filter') == 'ASUS Vivobook' ? 'selected' : '' }}>ASUS
                        Vivobook</option>
                </select>

                <div class="card shadow-sm">
                    <div class="card-header bg-secondary text-light">
                        <h3>PRODUCT HISTORY</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center align-middle">
                                @forelse ($fetchData as $data)
                                    <tr>
                                        <td>{{ $data->product }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>{{ $data->quantity }}</td>
                                        <td>{{ $data->subtotal }}</td>
                                        <th class="d-flex gap-3">
                                            <div class="w-100">
                                                <a href="{{ route('view.edit', ['productID' => $data->productID]) }}"
                                                    class="btn btn-warning w-100">Edit</a>
                                            </div>

                                            <div class="w-100">
                                                <form
                                                    action="{{ route('db.product_destroy', ['productID' => $data->productID]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                                                </form>
                                            </div>
                                        </th>
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
    </section>


    {{-- Select Filter Product --}}
    <script>
        var filterHistory = document.getElementById('filterHistory');

        filterHistory.addEventListener('change', function() {
            var selectedValue = filterHistory.value;
            window.location.href = '{{ route('view.history') }}?filter=' + selectedValue;
        });
    </script>
@endsection
