@extends('mainlayout.layout1')
@section('content')

<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        {{-- <a class="navbar-brand" href="#">Logo</a> --}}
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="home">Dashboard</a></li>
          {{-- <li><a href="#">Age</a></li> --}}
          {{-- <li><a href="#">Gender</a></li> --}}
          {{-- <li><a href="#">Geo</a></li> --}}
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        {{-- <h2>Logo</h2> --}}
        <ul class="nav nav-pills nav-stacked">
          {{-- <li class="active"><a href="#">Dashboard</a></li> --}}
          {{-- <li><a href="#section2">Age</a></li>
          <li><a href="#section3">Gender</a></li>
          <li><a href="#section3">Geo</a></li> --}}
        </ul><br>
      </div>
      <br>
      
      <div class="col-sm-9">
        <div class="well">
          <h4>Dashboard</h4>
          <p>Name: {{Auth::user()->fname}}</p>
          <p>UserId: {{Auth::user()->email}}</p>
        </div>
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
              <h4>Total Users</h4>
              <p>{{ number_format($totalusers) }}</p>
              
              {{-- <p>1 Million</p>  --}}
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Total Couriers</h4>
              <p>{{ number_format($totalcouriers) }}</p> 
              {{-- <p>{{ number_format($courier) }}</p>  --}}
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Total Amount</h4>
              <p>{{number_format ($totalcharges) }}</p> 
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <h4>Discount</h4>
              <p>30%</p> 
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p> 
              <p>Text</p> 
              <p>Text</p> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p> 
              <p>Text</p> 
              <p>Text</p> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p> 
              <p>Text</p> 
              <p>Text</p> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="well">
              <p>Text</p> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="well">
              <p>Text</p> 
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
    
@endsection