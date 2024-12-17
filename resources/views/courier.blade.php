@extends('mainlayout.layout1')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table align-middle mb-0 bg-white">
                <thead class="bg-light">
                    <th>Booking Date</th>
                    <th>Sender Name</th>
                    <th>Receiver Name</th>
                    <th>Receiver Address</th>
                    <th>Receiver Contact</th>
                    <th>QTY</th>
                    <th>Amount</th>
                    
                    
                </thead>
                
                @foreach ($data as $a)

                <tr>
                    <td><p class="fw-bold mb-1">{{$a->id}}</p></td>
                    <td>{{$a->bdate}}</td>
                    <td>{{$a->sname}}</td>
                    <td>{{$a->rname}}</td>
                    <td>{{$a->receiveraddress}}</td>
                    <td>{{$a->receivercontact}}</td>
                    <td>{{$a->qty}}</td>
                    <td>{{$a->charges}}</td>

                    <td><span class="badge badge-success rounded-pill d-inline">{{$a->status}}</span></td>
                    
                   <div>
                    {{-- <td><a href="{{route('viewrecord', $a->id)}}" class="btn btn-primary">View</a></td> --}}
                    <td><button class="btn btn-primary viewButton" data-id="{{ $a->id }}">View</button></td>
                    {{-- <td><a href="" class="btn btn-primary">View</a></td> --}}
                    <td>
                        <a href="{{route('updateviewcourier', $a->id)}}" 
                           class="btn btn-dark" 
                           onclick="openInNewWindow(event, this)">Update</a>
                    </td>
                    
                    {{-- <td><a href="{{route('updateviewcourier', $a->id)}}" class="btn btn-dark" method="get" onsubmit="openInNewWindow(event)">Update</a></td> --}}
                    {{-- <td><a href="{{route('updateview', $a->id)}}" class="btn btn-dark">Update</a></td> --}}
                    <td><a href="{{route('delete.courier',$a->id)}}" class="btn btn-danger">Delete</a></td>
                   
                   </div>
                </tr>
                    
                @endforeach

                <tr>
                    <div class="col-4">
                       {{-- <td><a href="/form" class="btn btn-dark">Add New Data</a></td> --}}
                       <td><a href="recipent" class="btn btn-dark">Add Recipient Courier</a></td>
                    </div>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection

{{-- Popup Code  Start --}}


<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.viewButton').forEach(button => {
            button.addEventListener('click', function () {
                const recordId = this.getAttribute('data-id'); // Get the record ID from the button
                const url = "{{ route('viewtracking') }}"; // Route to fetch record details

                // Fetch record details
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // CSRF Token for Laravel
                    },
                    body: JSON.stringify({ id: recordId }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Show record details in SweetAlert popup
                        Swal.fire({
                            title: 'Record Details',
                            html: `
                                <p><strong>Booking Date Name:</strong> ${data.data.bdate}</p>
                                <p><strong>Sender Name:</strong> ${data.data.sname}</p>
                                <p><strong>Receiver Name:</strong> ${data.data.rname}</p>
                                <p><strong>Sender Address:</strong> ${data.data.senderaddress}</p>
                                <p><strong>Receiver Address:</strong> ${data.data.receiveraddress}</p>
                                <p><strong>Amount:</strong> ${data.data.charges}</p>
                                <p><strong>QTY:</strong> ${data.data.qty}</p>
                                <p><strong>Sender Contact:</strong> ${data.data.sendercontact}</p>
                                <p><strong>Received Contact:</strong> ${data.data.receivercontact}</p>
                            `,
                            icon: 'success',
                        });
                    } else {
                        Swal.fire({
                            title: 'Error',
                            text: data.message,
                            icon: 'error',
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Error',
                        text: 'Something went wrong!',
                        icon: 'error',
                    });
                });
            });
        });
    });
</script>

    



{{-- End Popup --}}

{{-- Start Update View Page  --}}

<script>
    function openInNewWindow(event, linkElement) {
        event.preventDefault(); // Prevent the default anchor click behavior
        const url = linkElement.href; // Get the href of the anchor
    
        // Open the URL in a new window with custom settings
        window.open(url, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
    }
    </script>

{{-- End Update View Page --}}