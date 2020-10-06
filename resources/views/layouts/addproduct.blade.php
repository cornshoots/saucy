@extends("layouts.master")

@section("content")
<form action="">
        <div class="form-group">
          <label for="productname">Product Name</label>
          <input type="text" class="form-control" id="productname" aria-describedby="emailHelp" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label for="productdesc">Product Description</label>
            <input type="text" class="form-control" id="productdesc" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label for="productdescription">Price</label>
            <input type="text" class="form-control" id="productnameinput" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
          <div class="form-group">
            <label for="sellerid">Price</label>
            <input type="text" class="form-control" id="sellerid" aria-describedby="emailHelp" placeholder="Enter Product Name">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection