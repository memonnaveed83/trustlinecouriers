@extends('mainlayout.layout1')

@section('content')


<div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
    <div class="row text-center mb-3">
        <form action="{{route('user.report')}}" method="get" onsubmit="openInNewWindowuser(event)">
            @csrf 
            <div class="col">
                <button type="submit" class="btn btn-primary me-2">User Report</button>
            </div>
        </form>
    </div>

    <div class="row text-center mb-3">
        <form action="{{route('courier.report')}}" method="get" onsubmit="openInNewWindow(event)">
            @csrf 
            <div class="col">
                <button type="submit" class="btn btn-primary me-2">Courier Report</button>
            </div>
        </form>
    </div>


    <script>

        function openInNewWindowuser(event){
            event.preventDefault();
            const form = event.target;
            const url = form.action;
            window.open(url, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
        }

        function openInNewWindow(event) {
            event.preventDefault(); // Prevent the default form submission
            const form = event.target; // Get the form element
            const url = form.action; // Get the form's action URL
    
            // Open the form's URL in a new window with custom settings
            window.open(url, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
        }


    </script>

   


@endsection
