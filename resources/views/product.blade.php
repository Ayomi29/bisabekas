@extends('layouts.main')
@section('container')
<div class="container mt-4">
    {{-- Breadcrumb hapus aja kalau nda butuh --}}
    <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
        <ol class="breadcrumb p-3">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Catalog</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Category</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
    </nav>
    {{-- End breadcrumb --}}
    <div class="row row-container-product">
        <div class="col-lg-5">
            <figure class="figure">
                <img src="/image/produk/produk2.jpg" class="figure-img img-fluid" style="border-radius: 15px; width: 450px;" alt="...">
                <figcaption class="figure-caption">
                    <a href="" class="text-decoration-none">
                        <img src="/image/produk/produk2.jpg" class="figure-img img-fluid" style="border-radius: 15px; width: 70px;" alt="...">
                    </a>
                    <a href="" class="text-decoration-none">
                        <img src="/image/produk/produk2.jpg" class="figure-img img-fluid" style="border-radius: 15px; width: 70px;" alt="...">
                    </a>
                    <a href="" class="text-decoration-none">
                        <img src="/image/produk/produk2.jpg" class="figure-img img-fluid" style="border-radius: 15px; width: 70px;" alt="...">
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-7">
            <h4>Black Shirt</h4>
            <div class="line-divider"></div>
            <h3 class="text-muted">Harga: Rp. 120.000,00</h3>
            <a href="/payment" class="btn btn-outline-dark">Buy</a>
            <p class="mt-5">Balikpapan Kota, Kalimantan Timur</p>
            <div class="row d-flex align-content-center align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 align-content-center">
                    <h5 class="fw-bold">Deskripsi Penjual</h5>
                    <p>Beckham</p>
                    <small class="mt-2">Bergabung sejak Desember 2022</small>
                    <div class="d-grid d-md-flex justify-content-center mt-4 mb-4 mb-lg-3">
                        <button type="button" class="btn btn-outline-dark btn-lg px-4 me-md-2 fw-bold">Hubungi Penjual</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-container-product mt-3">
        <div class="col-lg-5">
            <h4>Detail</h4>
            <p><span>Merek: Bangsa</span><br><span>Kondisi: Bekas</span>
            </p>
            <div class="line-divider"></div>
            <h4>Deskripsi Produk</h4>
            <p>Kemaja warna hitam dengan ukuran S, L, XL, dan XXL </p>
        </div>
    </div>
</div>
@endsection



