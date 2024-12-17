@extends('mainlayout.layout1')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <th>Sno</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>UserId</th>
                    <th>UserType</th>
                    
                    
                </thead>
                
                @foreach ($data as $a)

                <tr>
                    <td><p class="fw-bold mb-1">{{$a->id}}</p></td>
                    <td>{{$a->fname}}</td>
                    <td>{{$a->lname}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->contact}}</td>
                    <td>{{$a->userid}}</td>
                    <td><span class="badge badge-success rounded-pill d-inline">{{$a->type}}</span></td>
                    
                    {{-- <td><a href="{{route('user.show', $a->id)}}" class="btn btn-primary" onsubmit="openInNewWindow(event)">View</a></td> --}}
                    
                    <td>
                        <a href="{{ route('user.show', $a->id) }}" 
                           class="btn btn-primary" 
                           onclick="openInNewWindow(event, this.href)">View</a>
                    </td>

                    <td>
                        <a href="{{route('update.view', $a->id)}}" 
                           class="btn btn-dark" 
                           onclick="openInNewWindow1(event, this)">Update</a>
                    </td>

                    {{-- <td><a href="" class="btn btn-primary">View</a></td> --}}
                    {{-- <td><a href="{{route('update.view', $a->id)}}" class="btn btn-dark">Update</a></td> --}}
                    {{-- <td><a href="" class="btn btn-dark">Update</a></td> --}}
                    <td><a href="{{route('delete.user',$a->id)}}" class="btn btn-danger">Delete</a></td>
                    {{-- <td><a href="" class="btn btn-danger">Delete</a></td> --}}
                </tr>
                    
                @endforeach

                <tr>
                    <div class="col-4">
                       {{-- <td><a href="/form" class="btn btn-dark">Add New Data</a></td> --}}
                       <td><a href="register" class="btn btn-dark">Add New User</a></td>
                    </div>
                </tr>
            </table>
        </div>
    </div>
</div>





    
@endsection

<script>

function openInNewWindow(event, url) {
        event.preventDefault();
        window.open(
            url, 
            '_blank', 
            'width=800,height=600,scrollbars=yes,resizable=yes'
        );
    }

</script>

{{-- Start Update View Page  --}}

<script>
    function openInNewWindow1(event, linkElement) {
        event.preventDefault(); // Prevent the default anchor click behavior
        const url = linkElement.href; // Get the href of the anchor
    
        // Open the URL in a new window with custom settings
        window.open(url, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
    }
    </script>

{{-- End Update View Page --}}
