@include('layouts.header')
@include('partials.navbar')


<div class="container-fluid banner">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/banner/depot-air.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/banner/pecel.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/banner/kripik-singkong.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>

<div class="container-fluid ms-3 produk">
    <div class="row mt-3 m-0 p-0">
        <div class="col-lg-3 sidebar pe-5">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                    </div>
                    <div class="header mb-3">
                        <h5>Our Best Sellers</h5>
                    </div>
                    @for ($i = 1; $i <= 5; $i++)
                    <div class="best-seller">
                        <div class="image" style="height: 80%; width:50%; margin-top:10px;">
                            <img src="images/produk/lohan.jpg" alt="employee" class="img-fluid float-start me-3 mt-3">
                        </div>
                        <div class="txt">
                            <p>Lohan Merah</p>
                            <p>Rating</p>
                            <p>Rp. 190.000</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-8 ms-5 ps-3">
            <div class="row">
             @for ($i = 1; $i <= 12; $i++)
             <div class="col-3  p-0 m-0">
                 <div class="card mb-3" style="width: 14rem;">
                    <img src="images/produk/lohan.jpg" class="card-img-top" alt="...">
                    <a href="/product" style="text-decoration: none; color:black">
                     <div class="card-body">
                       <h3>Lohan Merah</h3>
                       <h4>hdlfalhg</h4>
                       <h5>Rp. 190.000</h5>
                       <h5>rating</h5>
                    </div>
                </a>
                 </div>
             </div>
             @endfor
            </div>
        </div>
    </div>
</div>

@include('partials.footer')




@include('layouts.scripts')
