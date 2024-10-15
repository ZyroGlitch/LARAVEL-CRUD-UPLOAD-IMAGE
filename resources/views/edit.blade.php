@extends('layout.navbar')

@section('page-content')
    <section class="container vh-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-4 col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="text-end mb-1">
                            <?php
                            $i = 0;
                            ?>
                            @while ($i < 5)
                                @if ($i == 4 || $i == 3)
                                    <i class="bi bi-star-fill text-dark fs-3"></i>
                                @else
                                    <i class="bi bi-star-fill text-warning fs-3"></i>
                                @endif

                                <?php
                                $i++;
                                ?>
                            @endwhile
                        </div>
                        <div class="text-center">
                            <img src="{{ URL($data->img) }}" alt="img" class="object-fit-contain"
                                style="width:250px;height:250px;">

                        </div>
                    </div>
                    <div class="card-footer bg-primary text-light p-3">
                        <form action="{{ route('db.product_edit') }}" method="post">
                            @csrf
                            @method('put')

                            <input type="hidden" name="productID" value="{{ $data->productID }}">
                            <input type="hidden" name="price" value="{{ $data->price }}">

                            <h2 class="fw-bold mb-2">{{ $data->product }}</h2>
                            <h4 class="mb-2">₱{{ $data->price }}</h4>
                            <div class="d-flex align-items-center mb-4">
                                <label for="quantity" class="form-label me-3">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    value="{{ $data->quantity }}">

                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light fw-semibold">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
