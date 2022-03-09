@include('layouts.header')
@include('partials.navbar')

<div class="container produk" style="margin-top: 81px">
    <div class="row mt-3 m-0 p-0 justify-content-center">
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
            <div class="row" style="border-bottom: 1px solid gray; padding-bottom:20px">
                <div class="col-6">
                    <div class="img-produk">
                        <img src="images/produk/lohan.jpg" alt="" class="w-100 h-100">
                    </div>
                    <h6 class="mt-4 mb-3">Pesan Pruduct ini!</h6>
                    <a href="" class="market-place"><img src="images/icons/tokped.png" alt="" class="img-fluid"></a>
                    <a href="" class="market-place"><img src="images/icons/shopee.png" alt="" class="img-fluid"></a>
                    <a href="" class="market-place"><img src="images/icons/lazada.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col-6">
                    <div class="deskripsi-produk">
                        <h3>Lohan Merah</h3>
                        <p>Rp. 190.000</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto natus dignissimos magni eius fugit fuga molestiae, dolore, sit quasi dicta reiciendis. Ducimus assumenda ex doloremque optio fuga vero debitis mollitia quod natus ea hic praesentium, at harum minima molestiae ut incidunt iste temporibus, expedita quia dolore? Sapiente, quos, alias accusantium nihil nesciunt consequatur enim similique vel, ipsum amet inventore labore ea expedita ratione nostrum odio. Nemo beatae placeat dignissimos aliquid ab iusto eum voluptate ex, voluptatibus quaerat quae distinctio veniam? Inventore molestias et fuga ratione magnam natus molestiae nemo tempore, eius itaque, exercitationem voluptates expedita quas sint illo dolorum enim.</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Jumlah :</span>
                            <input type="number" class="form-control" aria-label="jumblah" aria-describedby="basic-addon1">
                            <button class="btn btn-primary">Tambah Ke keranjang</button>
                        </div>
                        <h6>Bagikan Product ini!</h6>
                       <a href="" class="medsos" style="background-color: purple"><i class="bi bi-instagram"></i></a>
                       <a href="" class="medsos" style="background-color:green"><i class="bi bi-whatsapp"></i></a>
                       <a href="" class="medsos" style="background-color:blue"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="additional-info">
                <a href="">Deskripsi</a>
                <a href="">Informasi Tambahan</a>
                <a href="">Ulasan</a>
            </div>
           @yield('additional-info')
        </div>
    </div>
</div>

@include('partials.footer')




@include('layouts.scripts')
