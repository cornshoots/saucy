<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card newscard">
                        <div class="card-body">
                            <h5 class="card-title">Sauce News 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read Full Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img class="d-block w-100 newsimage" src="{{ asset('img/saucenews1.png') }}" alt="First slide">
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
        <div class="row">
        <div class="col-6">
          <img class="d-block w-100 newsimage" src="{{ asset('img/saucenews2.png') }}" alt="Second slide">
        </div>
        <div class="col-6">
          <div class="card newscard">
              <div class="card-body">
                  <h5 class="card-title">Sauce News 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Read Full Article</a>
              </div>
          </div>
      </div>
    </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-4">
            <div class="card newscard">
                <div class="card-body">
                    <h5 class="card-title">Sauce News 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Read Full Article</a>
                </div>
            </div>
        </div>
        <div class="col-8">
        <img class="d-block w-100 newsimage" src="{{ asset('img/saucenews3.png') }}" alt="Third slide">
      </div>
    </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>