@extends("layouts.master")

@section("content")
<form action="products.store" method="POST">
        <div class="form-group">
          <label for="productname">Product Name</label>
          <input type="text" class="form-control" id="productname" name="productname" aria-describedby="emailHelp" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label for="productdesc">Product Description</label>
            <input type="text" class="form-control" id="productdesc" name="product_description" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label for="productdescription">Price</label>
            <input type="text" class="form-control" id="productnameinput" name="price" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label for="sellerid">Image Url</label>
            <input type="text" class="form-control" id="sellerid" aria-describedby="emailHelp" name="productimage" placeholder="Enter Product Name">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection