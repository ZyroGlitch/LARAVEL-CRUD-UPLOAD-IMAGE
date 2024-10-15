@extends('layout.navbar')

@section('page-content')
    <section class="container-fluid h-auto py-5">
        <div class="d-flex justify-content-evenly align-items-center">
            <div class="col-lg-3 col-md-3">
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
                            <img src="assets/LEGION.png" alt="Legion" class="object-fit-contain"
                                style="width:200px;height:200px;">

                        </div>
                    </div>
                    <div class="card-footer bg-primary text-light p-3">
                        <form action="{{ route('db.product_store') }}" method="post">
                            @csrf
                            @method('post')

                            <input type="hidden" name="customerID" value="{{ $userID }}">
                            <input type="hidden" name="product" value="Legion">
                            <input type="hidden" name="price" value="25000">
                            <input type="hidden" name="quantity" value="2">
                            <input type="hidden" name="subtotal" value="50000">
                            <input type="hidden" name="img" value="assets/LEGION.png">

                            <h2 class="fw-bold mb-2">LEGION</h2>
                            <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis
                                asperiores aperiam deleniti incidunt?</p>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4>₱25000</h4>
                                <h4>75 Stock Left</h4>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light fw-semibold" name="legionBtn">BUY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
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
                            <img src="assets/MACBOOK.png" alt="Legion" class="object-fit-contain"
                                style="width:200px;height:200px;">

                        </div>
                    </div>
                    <div class="card-footer bg-primary text-light p-3">
                        <form action="{{ route('db.product_store') }}" method="post">
                            @csrf
                            @method('post')

                            <input type="hidden" name="customerID" value="{{ $userID }}">
                            <input type="hidden" name="product" value="MacBook">
                            <input type="hidden" name="price" value="30000">
                            <input type="hidden" name="quantity" value="2">
                            <input type="hidden" name="subtotal" value="60000">
                            <input type="hidden" name="img" value="assets/MACBOOK.png">

                            <h2 class="fw-bold mb-2">MACKBOOK</h2>
                            <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis
                                asperiores aperiam deleniti incidunt?</p>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4>₱30000</h4>
                                <h4>10 Stock Left</h4>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light fw-semibold" name="macbookBtn">BUY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3">
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
                            <img src="assets/ASUS.png" alt="Legion" class="object-fit-contain"
                                style="width:200px;height:200px;">

                        </div>
                    </div>
                    <div class="card-footer bg-primary text-light p-3">
                        <form action="{{ route('db.product_store') }}" method="post">
                            @csrf
                            @method('post')

                            <input type="hidden" name="customerID" value="{{ $userID }}">
                            <input type="hidden" name="product" value="ASUS Vivobook">
                            <input type="hidden" name="price" value="27000">
                            <input type="hidden" name="quantity" value="2">
                            <input type="hidden" name="subtotal" value="54000">
                            <input type="hidden" name="img" value="assets/ASUS.png">

                            <h2 class="fw-bold mb-2">ASUS VIVOBOOK</h2>
                            <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem debitis
                                asperiores aperiam deleniti incidunt?</p>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4>₱27000</h4>
                                <h4>30 Stock Left</h4>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-light fw-semibold" name="asusBtn">BUY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
