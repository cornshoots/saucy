@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="row">
            @include("layouts.widgets.productinfo")
            </div>
        </div>
        <div class="col-2">
            @include("layouts.widgets.shoppingsidebar")
        </div>

</div>
@endsection