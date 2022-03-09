@include('layouts.header')
@include('partials.navbar')

   {{-- jumbotron --}}
   <div class="container-fluid jumbotron" style="background-image: url(images/bg.jpg); margin-top:71px">
       <div class="container">
           <div class="txt">
            <h1 class="display-4">Fluid Jumbotron</h1>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum aperiam, odio animi ullam repellendus facere molestias fugiat doloribus esse architecto.</p>
           </div>
       </div>
   </div>
   {{-- akhir jumbrotron --}}

   {{-- container --}}
   <div class="container">
     {{-- info panel --}}
     <div class="row justify-content-center">
       <div class="col-10 info-panel">
        <div class="row">
            <div class="col-lg">
                <img src="images/employee.png" alt="employee" class="float-start">
                <div class="txt">
                    <h4>24 hours</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg">
                <img src="images/hires.png" alt="hires" class="float-start">
                <div class="txt">
                    <h4>24 hours</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="col-lg">
                <img src="images/security.png" alt="security" class="float-start">
                <div class="txt">
                    <h4>24 hours</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
       </div>
     </div>
     {{-- akhir info panel --}}


     {{-- writing --}}
     <div class="row writing" >
         <div class="col-lg">
            <img src="images/workingspace.png" alt="" class="img-fluid">
         </div>
         <div class="col-lg">
            <h3>Beli <span>cemilan</span> sambil <span>rebahan</span> di rumah</h3>
            <p>Jajan dengan suasana hati yang lebih asik dengan jajanan yang bervariasi</p>
            <a href="" class="btn btn-primary">Produk</a>
         </div>
     </div>
     {{-- akhir writing --}}


     {{-- blog --}}
     <div class="row mt-5">
     <div class="col-12">
     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 25rem;">
                            <img src="images/bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </div>
     {{-- blog --}}

</div>
@include('partials.footer')


   @include('layouts.scripts')
