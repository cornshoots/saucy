@extends("layouts.master")

@section("content")
<div class="container-fluid">
    <div class="row">
    <div class="col-12">
            @include("layouts.widgets.saucenews")
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title">What's in the box?</h2>
                    <img class="card-img" src="/img/boxnotext.png" alt="Card image cap" id="boxnotext">
                    <h6 class="card-text">A subscription service for all your condiment needs</h6>
                    <p class="card-text">Do you crave condiments all day everyday? Then the saucy lil' box is exactly
                        what you need! Providing endless flavour to the boring meals you cook from just £13.99 every month,
                        the saucy lil' box is a curated subscirption service that will broaden your condiment horizons to no end
                        to find out more about the packages we offer and gift options click the link below!
                    </p>
                  <a href="#" class="btn btn-primary">Find out more</a>
                </div>
              </div>
        </div>
    </div>


</div>
@endsection