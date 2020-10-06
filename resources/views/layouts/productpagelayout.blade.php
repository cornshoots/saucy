@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
    <div class="col-10">
            @include("layouts.widgets.productinfo")
        </div>
        <div class="col-2">
            @include("layouts.widgets.sidebar")
        </div>

    </div>
</div>
@endsection