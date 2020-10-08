@foreach ($products as $product)
<div class="col-3 pt-5">
<div class="card">
  <h5 class="card-header">{{ $product->productname }}</h5>
  <div class="card-body">
    <img class="card-img-top" src="{{ $product->productimage }}" alt="Sauce Image" id="sauceicon">
    {{-- <p class="card-text">{{ $product->product_description }}</p>
    <h5 class="card-text">{{ $product->supplier->supplier_name}}</h5> --}}
    <a href="{{ route('product.show',['productid'=>$product->product_id])  }}" class="btn btn-primary">More Info</a>
  </div>
</div>
</div>
@endforeach
