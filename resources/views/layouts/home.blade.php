@extends("layouts.master")

@section("content")
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
            @include("layouts.widgets.saucenews")
        </div>
        @foreach ($products as $product)

        <h1>
    
            {{ $product->productname }}
    
        </h1>
        <p>
            {{ $product->description }}
        </p>
        
    @endforeach
    </div>
</div>
@endsection