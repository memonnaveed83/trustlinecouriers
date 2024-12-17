
@extends('layouts.app')
@section('content')
  

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="img/logo.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">We are The Trusline Team</h4>
                  </div>

                      {{-- Display Validation Errors --}}
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
  
          {{-- <form action="{{ route('login.process') }}" method="post"> --}}

            <form action="{{route('login')}}" method="post">

                  @csrf

                    <p>Please login to your account</p>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" name="email" id="email" class="form-control"
                        placeholder="Please Enter Email" />
                      <label class="form-label" for="email">Email</label>
                    </div>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" name="password" id="password" class="form-control" />
                      <label class="form-label" for="password">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                        in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="{{ route('register') }}" class="btn btn-outline-danger" data-mdb-button-init data-mdb-ripple-init>
                        Create new
                      </a>
                      {{-- <a href="" class="btn btn-outline-danger" data-mdb-button-init data-mdb-ripple-init>
                        Create new
                      </a> --}}
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">More Than Just a Company, We Deliver Trust</h4>
                  <p class="small mb-0">Welcome to Trustline Courier! Our dedicated team is committed to providing fast, reliable, and secure delivery services to meet your needs. Login to experience seamless and trustworthy service with us.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection