@extends('layouts.main')
@section('container')
<div class="container mt-4">
    <!-- Contact section -->
    <section id="contact">
      <div class="contact">
        <div class="container">
          <div class="mb-5 text-center">
              <h5>Need a help?</h5>
              <h2 class="fw-bold">Contact Us</h2>
          </div>

          <div class="row">
            <div class="col-lg-5 col-md-5">
                <h4 class="fw-bold">Contact Info</h4>
                <ul class="info list-unstyled">
                  <li class="d-flex align-items-center"> 
                      <p><a href="" class="text-decoration-none"><i class="bi bi-geo-alt-fill"></i> BisaBekas, Balikpapan, Kalimantan Timur, Indonesia</a></p>
                  </li>
                  <li class="d-flex align-items-center">
                      <p><a href="" class="text-decoration-none"><i class="bi bi-telephone"></i> +91 999-999-9999</a></p>
                  </li>
                  <li class="d-flex align-items-center">
                      <p><a href="" class="text-decoration-none"><i class="bi bi-envelope"></i> bisabekas@gmail.com</a></p>
                  </li> 
                </ul>
            </div>
            <div class="col-lg-7 col-md-7 pt-lg-0 pt-md-0 pt-4">
              <form>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <input class="textarea" name="message" cols="30" rows="4" id="message" placeholder="Enter your message">
                        </div>
                      </div>
                      <div class="col-md-12"> 
                        <button class="btn btn-danger"><span class="ti-rocket pe-2 fs-5"></span> Send Message</button>
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection

