@extends('frontend.layouts.main')
@section('main-content')
    <section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10">

            <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
            </div>

            <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                    <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                    </button>

                    <input id="form1" min="1" name="quantity" value="1" type="number"
                    class="form-control form-control-sm text-center" />

                    <button class="btn btn-link px-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h5 class="mb-0">$499.00</h5>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                </div>
                </div>
            </div>
            </div>

            <div class="card mb-4">
            <div class="card-body">

            <div class="row m-0">
                <div class="col-sm-6 font-weight-bold border-bottom p-0 pt-3 pb-2">
                Subtotal
                </div>
                <div class="col-sm-6 text-right border-bottom p-0 pt-3 pb-2">
                Rs. 23,700.00
                </div>
                <div class="col-sm-6 font-weight-bold border-bottom p-0 pt-3 pb-2">
                Shipping
                </div>
                <div class="col-sm-6 text-right border-bottom p-0 pt-3 pb-2">
                free
                </div>
                <div class="col-sm-6 font-weight-bold border-bottom p-0 pt-3 pb-2">
                Total
                </div>
                <div class="col-sm-6 text-right border-bottom p-0 pt-3 pb-2">
                Rs. 23,700.00
                </div>
            </div>
            <div class="mt-3">
                <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
            </div>
            <div class="mt-3">
                <button type="button" class="btn btn-light btn-block btn-lg">Continue Shopping</button>
            </div>
            </div>

        </div>
        </div>
    </div>
    </section>
@endsection