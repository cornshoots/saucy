@extends("layouts.master")

@section("content")
@foreach ($products as $product)
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <h5 class="card-header">{{ $product->productname }}</h5>
                <div class="card-body">
                  <img class="card-img-top" src="{{ $product->productimage }}" alt="Sauce Image" id="sauceicon">
                  <p class="card-text">{{ $product->product_description }}</p>
                  <h5 class="card-text">{{ $product->supplier->supplier_name}}</h5>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
        <div class="col-2">
            @include("layouts.widgets.shoppingsidebar")
        </div>

    </div>
</div>
@endforeach
@endsection