@extends('layouts.main')
@section('container')
<div class="container mt-4">
  {{-- Awal slider --}}

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/image/img1.jpg" class="img-fluid d-block" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="/image/img2.jpg" class="img-fluid d-block" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="/image/img3.jpg" class="img-fluid d-block" alt="Image 3">
      </div>
      <div class="carousel-item">
        <img src="/image/img4.jpg" class="img-fluid d-block" alt="Image 4">
      </div>
      <div class="carousel-item">
        <img src="/image/img5.jpg" class="img-fluid d-block" alt="Image 5">
      </div>
      <div class="carousel-item">
        <img src="/image/img6.jpg" class="img-fluid d-block" alt="Image 6">
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

  {{-- Body setelah slider --}}
  {{-- Tampilan Categories --}}

  <div class="container mt-5">
    <div class="categories-title">
      <h5 class="text-center" style="margin-top: 5px;">Categories</h5>
    </div>
    <div class="row text-center row-container mt-2">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/baju.png" class="img-category mt-3" alt="Clothes"></a>
          <p class="mt-2">Clothes</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/celana.png" class="img-category mt-3" alt="Trousers"></a>
          <p class="mt-2">Trousers</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/sepatu.png" class="img-category mt-3" alt="Shoes"></a>
          <p class="mt-2">Shoes</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/elektronik.png" class="img-category mt-3" alt="Electronics"></a>
          <p class="mt-2">Electronics</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/hp.png" class="img-category mt-3" alt="Smartphone & Accessories"></a>
          <p class="mt-2">Smartphone & Accessories</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/kosmetik.png" class="img-category mt-3" alt="Cosmetic"></a>
          <p class="mt-2">Cosmetic</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/otomotif.png" class="img-category mt-3" alt="Automotive"></a>
          <p class="mt-2">Automotive</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/laptop.png" class="img-category mt-3" alt="Computer & Accessories"></a>
          <p class="mt-2">Computer & Accessories</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/furniture.png" class="img-category mt-3" alt="Furniture"></a>
          <p class="mt-2">Furniture</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/accessories.png" class="img-category mt-3" alt="Accessories"></a>
          <p class="mt-2">Accesories</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/hobby.png" class="img-category mt-3" alt="Hobby"></a>
          <p class="mt-2">Hobby</p>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-category">
          <a href=""><img src="/image/kategori/tas.png" class="img-category mt-3" alt="Bags"></a>
          <p class="mt-2">Bags</p>
        </div>
      </div>
    </div>
  </div>

  {{-- Akhir Categories --}}
  
  {{-- Tampilan Products --}}
  
  <div class="container mt-5">
    <div class="product-title">
      <h5 class="text-center" style="margin-top: 5px;">Latest Product</h5>
    </div>
    <div class="row mt-2 row-container-products justify-content-center">
      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="/image/produk/produk1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Headset</h6>
            <p class="card-text">Rp. 300.000,00</p>
            <a href="/product" class="btn btn-primary d-grid">Buy</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="/image/produk/produk2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Black Shirt</h6>
            <p class="card-text">Rp. 120.000,00</p>
            <a href="/product" class="btn btn-primary d-grid">Buy</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="/image/produk/produk3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">NIKE Air Jordan</h6>
            <p class="card-text">Rp. 1.000.000,00</p>
            <a href="/product" class="btn btn-primary d-grid">Buy</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="/image/produk/produk4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Watch</h6>
            <p class="card-text">Rp. 300.000,00</p>
            <a href="/product" class="btn btn-primary d-grid">Buy</a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6">
        <div class="card text-center">
          <img src="/image/produk/produk9.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Keyboard</h6>
            <p class="card-text">Rp. 240.000,00</p>
            <a href="/product" class="btn btn-primary d-grid">Buy</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Akhir Products --}}
  
</div>

@endsection
