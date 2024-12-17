@extends('mainlayout.layout')

@section('content')
    


<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <th>City</th>
                    <th>Price</th>
                    
                    
                    
                    
                </thead>
                
                @foreach ($data as $a)

                <tr>
                    
                    <td>{{$a->city}}</td>
                    <td>{{$a->price}}</td>
                  

                   
                    
                   <div>
                    {{-- <td><a href="{{route('viewrecord', $a->id)}}" class="btn btn-primary">View</a></td> --}}
                    {{-- <td><button class="btn btn-primary viewButton" data-id="{{ $a->id }}">View</button></td> --}}
                    {{-- <td><a href="" class="btn btn-primary">View</a></td> --}}
                    {{-- <td><a href="{{route('updateview', $a->id)}}" class="btn btn-dark">Update</a></td> --}}
                    {{-- <td><a href="{{route('updateview', $a->id)}}" class="btn btn-dark">Update</a></td> --}}
                    {{-- <td><a href="{{route('studentdelete',$a->id)}}" class="btn btn-danger">Delete</a></td> --}}
                    {{-- <td><a href="" class="btn btn-danger">Delete</a></td> --}}
                   </div>
                </tr>
                    
                @endforeach

                <tr>
                    <div class="col-4">
                       {{-- <td><a href="/form" class="btn btn-dark">Add New Data</a></td> --}}
                       {{-- <td><a href="recipent" class="btn btn-dark">Add Recipient Courier</a></td> --}}
                    </div>
                </tr>
            </table>
        </div>
    </div>
</div>

    
@endsection