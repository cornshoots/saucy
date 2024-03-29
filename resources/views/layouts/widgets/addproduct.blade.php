@extends("layouts.master")

@section("content")
<div class="col-4 offset-4">
<form action="{{ route('products.store') }}" method="POST">
    @csrf
        <div class="form-group">
          <label for="productname">Product Name</label>
          <input type="text" class="form-control" id="productname" name="productname"  placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label for="productdesc">Product Description</label>
            <input type="text" class="form-control" id="productdesc" name="product_description" aria-describedby="emailHelp" placeholder="Enter Product Description">
          </div>
          <div class="form-group">
            <label for="productdescription">Price</label>
            <input type="number" class="form-control" id="productnameinput" name="price"  placeholder="Enter Product Price">
          </div>
          <div class="form-group">
            <label for="productdescription">Supplier ID</label>
            <input type="number" class="form-control" id="supplierid" name="supplier_id" placeholder="Enter Supplier ID">
          </div>
          <div class="form-group">
            <label for="imageurl">Image Url</label>
            <input type="url" class="form-control" id="imageurl"  name="productimage" placeholder="Enter URL for product image">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection