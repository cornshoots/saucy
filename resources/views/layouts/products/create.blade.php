@extends("layouts.master")

@section("content")
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
            @include("layouts.widgets.saucenews")
        </div>
        @include("layouts.widgets.addproduct")

    </div>
</div>
@endsection