<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    {{-- <link rel="stylesheet" href="{{ asset('css/updatecourier.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>


    

    {{-- start update form --}}

  




    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card w-50">
            <div class="card-body">
                <div class="m-sm-4">
                    <form action="{{route('updatecourier1', $result->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Update Booking Date</label>
                            <input class="form-control form-control-lg" type="date" value="{{$result->bdate}}" name="bdate" placeholder="Update Booking Date">
                        </div>
                        <div class="form-group">
                            <label>Update Sender Name</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->sname}}" name="sname" placeholder="Update Sender Name">
                        </div>
                        <div class="form-group">
                            <label>Update Receiver Name</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->rname}}" name="rname" placeholder="Update Receiver Name">
                        </div>
                        <div class="form-group">
                            <label>Update Sender Address</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->senderaddress}}" name="senderaddress" placeholder="Update Sender Address">
                        </div>
                        <div class="form-group">
                            <label>Update Receiver Address</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->receiveraddress}}" name="receiveraddress" placeholder="Update Receiver Address">
                        </div>
                        <div class="form-group">
                            <label>Update Charges</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->charges}}" name="charges" placeholder="Update Amount">
                        </div>
                        <div class="form-group">
                            <label>Update Quantity</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->qty}}" name="qty" placeholder="Update Quantity">
                        </div>
                        <div class="form-group">
                            <label>Update Sender Contact</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->sendercontact}}" name="sendercontact" placeholder="Update Sender Contact">
                        </div>
                        <div class="form-group">
                            <label>Update Receiver Contact</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->receivercontact}}" name="receivercontact" placeholder="Update Receiver Contact">
                        </div>
                        <div class="form-group">
                            <label>Update Received By</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->receivedby}}" name="receivedby" placeholder="Update Received By">
                        </div>
                        <div class="form-group">
                            <label>Update Received Date</label>
                            <input class="form-control form-control-lg" type="date" value="{{$result->receiveddate}}" name="receiveddate" placeholder="Update Received Date">
                        </div>
                       
                        <div class="form-group">
                            <label>Update Received By Contact</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->receivedbycontact}}" name="receivedbycontact" placeholder="Update Received By Contact">
                        </div>
                        {{-- <div class="form-group">
                            <label>Update Status</label>
                            <input class="form-control form-control-lg" type="text" value="{{$result->status}}" name="status" placeholder="Update Status">
                        </div> --}}
                        <div class="form-group">
                            <label for="status">Update Status</label>
                            <select class="form-control form-control-lg" id="status" name="status">
                                <option selected value="{{ $result->status }}">{{ $result->status }}</option> 
                                <option value="Delivered" {{ $result->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                <option value="Returned" {{ $result->status == 'Returned' ? 'selected' : '' }}>Returned</option>
                            </select>
                        </div>
                        
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-lg btn-dark">Update Courier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


{{-- End update form --}}




    







    
</body>
</html>


