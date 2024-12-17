@extends('mainlayout.layout1')



@section('content')

{{-- Booking Form Start  --}}


<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Book Your Courier</h1>
                    </div>
                    <form action="{{route('insertbooking')}}" method="post">

                        @csrf

                        

                      
                        <div class="form-group">
                            <input class="form-control" type="text" name="rname" placeholder="Receiver Name">
                            <span class="form-label">Receiver Name</span>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="receiveraddress" placeholder="Destination">
                                <span class="form-label">Destination</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="senderaddress" placeholder="Sener Address">
                                <span class="form-label">Sender Address</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="bdate" required>
                                    <span class="form-label">Booking Date</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="sname" placeholder="Sender Name">
                                   
                                    <span class="form-label">Sender Name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="charges" placeholder="Charges">
                                    {{-- <select class="form-control" required>
                                        <option value="" selected hidden>Charges</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span> --}}
                                    <span class="form-label">Charges</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="qty" placeholder="Quantity">
                                    {{-- <select class="form-control" required>
                                        <option value="" selected hidden>no of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span> --}}
                                    <span class="form-label">Quantity</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{-- <input class="form-control" type="text" name="total" placeholder="Total Amount"> --}}
                                     <select class="form-control" required name="status">
                                        <option value="" selected hidden>Choose Status</option>
                                        <option value="Transition">Transition</option>
                                        {{-- <option>1</option>
                                        {{-- <option>2</option> --}}
                                    </select>
                                    <span class="select-arrow"></span> 
                                    <span class="form-label">Choose Status</span> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="sendercontact" placeholder="Enter Sender Contact">
                                    <span class="form-label">Sender Contact</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="receivercontact" placeholder="Enter Receiver Contact">
                                    <span class="form-label">Receiver Contact</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <button class="submit-btn" type="submit">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Booking Form End --}}




    
@endsection