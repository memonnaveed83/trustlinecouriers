@extends('layouts.app')

@section('content')
  


<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

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

            
                <form action="{{route('register')}}" method="post">

              @csrf
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" name="fname" id="fName" class="form-control form-control-lg" />
                      <label class="form-label" for="fName">First Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" name="lname" id="lName" class="form-control form-control-lg" />
                      <label class="form-label" for="lName">Last Name</label>
                    </div>
  
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" name="userid" id="userid" class="form-control form-control-lg" />
                      <label class="form-label" for="userid">UserId</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" />
                      <label class="form-label" for="password">Password</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="password" name="password_confirmation" id="password_confirm" class="form-control form-control-lg" />
                      <label class="form-label" for="password_confirm">Confirm Password</label>
                    </div>
  
                  </div>
                </div>
  
                
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="email" name="email" id="email" class="form-control form-control-lg" />
                      <label class="form-label" for="email">Email</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div data-mdb-input-init class="form-outline">
                      <input type="tel" name="contact" id="contact" class="form-control form-control-lg" />
                      <label class="form-label" for="contact">Contact</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-12">
  
                    <select class="select form-control-lg" name="type">
                      <option value="" enabled>Choose type</option>
                      <option value="admin">Admin</option>
                      <option value="agent">Agent</option>
                      <option value="user">user</option>
                    </select>
                    <label class="form-label select-label">Choose UserType</label>
  
                  </div>
                </div>
  
                <div class="mt-4 pt-2">
                  <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection