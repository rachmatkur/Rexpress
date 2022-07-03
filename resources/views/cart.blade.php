@extends('master')

@section('title','Cart')
    
@section('content')
<div class="container-fluid bg-light m-0 p-0 position-relative">
    <img src="/gambar/banner.jpg" alt="" class="background">
    <div class ="contentContainer">
        <ul class="nav nav-pills nav-fill" style="margin-top: 30px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/cart">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-body" href="/history">History</a>
            </li>
        </ul>

        <h1 class="cartResto" style="margin-top: 50px">
            Ayam Tulang Lunak Wak Doyok
        </h1>

        <section class="h-100 h-custom" style="margin-bottom: 70px">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                  <div class="card-body p-0">
                    <div class="row g-0">
                      <div class="col-lg-8">
                        <div class="p-5">
                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img
                                src="https://goldenfingers.us/wp-content/uploads/2020/03/french_fry.jpg"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">Snack</h6>
                              <h6 class="text-black mb-0">French Fries</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                              </button>
        
                              <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />
        
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">Rp. 20.000</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                          </div>
        
                          <hr class="my-4">
        
                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img
                                src="https://assets-pergikuliner.com/aacqSvSRdxvqXWh1nuZCCqK-6jU=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/image/picture/1741531/picture-1576061062.jpg"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">Food</h6>
                              <h6 class="text-black mb-0">Ayam Tulang Lunak</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                              </button>
        
                              <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />
        
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">Rp. 45.000</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                          </div>
        
                          <hr class="my-4">
        
                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img
                                src="https://th.bing.com/th/id/OIP.vle-NWEAD9yJxnp11NDeOQHaLH?pid=ImgDet&rs=1"
                                class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">Beverages</h6>
                              <h6 class="text-black mb-0">Lemon Tea</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                              </button>
        
                              <input id="form1" min="0" name="quantity" value="1" type="number"
                                class="form-control form-control-sm" />
        
                              <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">Rp. 12.000</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                          </div>
        
                          <hr class="my-4">
        
                          <div class="pt-5">
                            <h6 class="mb-0"><a href="#!" class="text-body"><i
                                  class="fas fa-long-arrow-alt-left me-2"></i>Back to resto</a></h6>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 bg-grey">
                        <div class="p-5">
                          <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                          <hr class="my-4">
        
                          <div class="d-flex justify-content-between mb-4">
                            <h5 class="text-uppercase">Subtotal</h5>
                            <h5>Rp. 100.000</h5>
                          </div>

                          <div class="d-flex justify-content-between mb-4">
                            <h5 class="text-uppercase">Shipping</h5>
                            <h5>Rp. 20.000</h5>
                          </div>

                          <div class="d-flex justify-content-between mb-4">
                            <h5 class="text-uppercase">Discount</h5>
                            <h5>Rp. 0</h5>
                          </div>

                          <hr class="my-4">
        
                          <div class="d-flex justify-content-between mb-5">
                            <h5 class="text-uppercase">Total price</h5>
                            <h5>Rp. 120.000</h5>
                          </div>
        
                          <button type="button" class="btn btn-dark btn-block btn-lg"
                            data-mdb-ripple-color="dark">CHECKOUT</button>
        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    </div>
</div>

@endsection
