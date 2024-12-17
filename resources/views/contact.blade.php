@extends('mainlayout.layout')

@section('content')

 <!-- Contact Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <div class="bg-primary text-dark text-center p-4">
                    <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mr-2"></i>Defence Plaza, Hyderabad, Pakistan</h4>
                </div>
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.668600778102!2d68.34430157414488!3d25.382420977592133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c708fe5b5a2b3%3A0x3e8313a91af3d15e!2s98JW%2BXJP%20Defence%20Plaza%2C%20Block-A%2C%20Defence%20Plaza%20Thandi%20Sarak%2C%20Block-A%20Defence%2C%20Hyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1732206425217!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                <iframe style="width: 100%; height: 470px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.668600778102!2d68.34430157414488!3d25.382420977592133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c708fe5b5a2b3%3A0x3e8313a91af3d15e!2s98JW%2BXJP%20Defence%20Plaza%2C%20Block-A%2C%20Defence%20Plaza%20Thandi%20Sarak%2C%20Block-A%20Defence%2C%20Hyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1732206425217!5m2!1sen!2s"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">Contact Us</h6>
                <h1 class="mb-4">Contact For Any Queries</h1>
                <div class="contact-form bg-secondary" style="padding: 30px;">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control border-0 p-4" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control border-0 py-3 px-4" rows="3" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

    
@endsection