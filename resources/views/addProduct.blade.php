@extends('layout.navbar')

@section('page-content')
    <section class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center p-0">
                        <div class="text-center w-100 mb-3">
                            <h1><i class="bi bi-boxes"></i> Add Product</h1>
                        </div>

                        <div class="bg-secondary text-light w-100 p-3">
                            <form action="{{ route('db.addProduct_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <label for="product" class="form-label fw-semibold">Name</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-box-fill"></i></span>
                                    <input type="text" class="form-control" id="product" name="product">
                                </div>

                                <label for="price" class="form-label fw-semibold">Price</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-currency-exchange"></i></span>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>

                                <label for="stock" class="form-label fw-semibold">Stock</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-box-fill"></i></span>
                                    <input type="number" class="form-control" id="stock" name="stock">
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label fw-semibold">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="formFile" class="form-label fw-semibold">Upload Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>

                                <div class="d-grid">
                                    <input type="submit" value="ADD PRODUCT" class="btn btn-dark fw-bold">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
