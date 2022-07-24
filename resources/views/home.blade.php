@extends('master')

@section('title', 'homepage')

@section('content')
    <div class="container-fluid bg-light m-0 p-0 position-relative">
        <img src="/gambar/banner.jpg" alt="" class="background">
        <div class="contentContainer">
            <div id="carouselExampleDark" class="carousel carousel-dark slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>REXPRESS</h1>
                            <p>Providing you the best restaurants with a vast array of foods to choose from.</p>
                        </div>
                        <img src="/gambar/egg.png" class="img-fluid" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="/gambar/sayur.png" class="img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>FEATURED MENU: SAYUR</h1>
                            <p>Sayur atau sayuran merupakan sebutan umum bagi bahan pangan nabati yang biasanya mengandung
                                kadar air yang tinggi, yang dapat dikonsumsi setelah dimasak atau diolah dengan teknik
                                tertentu, atau dalam keadaan segar.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="/gambar/telor.png" class="img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>FEATURED MENU: TELUR</h1>
                            <p>Telur adalah wadah organik yang berisi zigot di mana embrio berkembang sampai dapat bertahan
                                hidup sendiri, di mana hewan menetas. Telur dihasilkan dari pembuahan sel telur. </p>
                        </div>
                    </div>
                    <div class="carousel-item w-100">
                        <img src="/gambar/burger.png" class="img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>BURGER</h1>
                            <p>Hamburger adalah sejenis roti berbentuk bundar yang diiris dua, dan di tengahnya diisi dengan
                                patty yang biasanya diambil dari daging, kemudian sayur-sayuran berupa selada, tomat dan
                                bawang bombai. </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
