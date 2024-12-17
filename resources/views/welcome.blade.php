@extends('mainlayout.layout')

@section('content')


 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid w-100" src="img/about.jpg" alt="">
                <div class="bg-primary text-dark text-center p-4">
                    <h3 class="m-0">25+ Years Experience</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                <p class="mb-4" style="text-align: justify;">Trustline Courier - Established in 2006, Trustline Courier has been a trusted name in delivering excellence and reliability in courier and logistics services. With over a decade of experience, we have built a strong reputation for providing fast, secure, and efficient delivery solutions to meet the needs of individuals and businesses alike. Our commitment to customer satisfaction, combined with cutting-edge technology and a dedicated team, ensures that every package is handled with the utmost care and professionalism. At Trustline Courier, we go the extra mile to connect people and businesses across the globe, delivering not just parcels but also trust and peace of mind. Let us take your delivery needs to the next level with services that are as dependable as they are innovative.</p>
                <div class="d-flex align-items-center pt-2">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://youtu.be/zHwiZyra5mk?si=K3t2UOM3EoxrPWk5" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!--  Quote Request Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                <h1 class="mb-4">Request A Free Quote</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                        <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                        <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                        <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary py-5 px-4 px-sm-5">
                    {{-- <form action="" method="post" class="py-5">
                    
                        <div class="form-group">
                            <input type="text" name="city" class="form-control border-0 p-4" placeholder="City Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="qty" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                        </div>
                        <div class="form-group">
                            <select class="custom-select border-0 px-4" style="height: 47px;">
                                <option selected>Select A Service</option>
                                <option value="Air Frieght">Air Frieght</option>
                                <option value="Ocean Frieght">Ocean Frieght</option>
                                <option value="Land Transport">Land Transport</option>
                                <option value="Cargo Storage">Cargo Storage</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                        </div>
                    </form> --}}
                    {{-- <form action="{{ route('quote.get') }}" method="post" class="py-5">
                        {{-- <form action="" method="post" class="py-5"> mk
                          
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control border-0 p-4" placeholder="City Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="number" name="qty" class="form-control border-0 p-4" placeholder="Quantity" required="required" />
                        </div>
                        <div class="form-group">
                            <select class="custom-select border-0 px-4" style="height: 47px;" name="service" required>
                                <option value="" disabled selected>Select Service</option>
                                <option value="Air Freight">Air Freight</option>
                                <option value="Ocean Freight">Ocean Freight</option>
                                <option value="Land Transport">Land Transport</option>
                                <option value="Cargo Storage">Cargo Storage</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                        </div>
                    </form>
                    
                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote Request Start -->


<!-- Services Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Services</h6>
            <h1 class="mb-4">Best Logistic Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Air Freight</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Ocean Freight</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Land Transport</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                    <i class="fa fa-2x fa-store text-dark pr-3"></i>
                    <h6 class="text-white font-weight-medium m-0">Cargo Storage</h6>
                </div>
                <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet diam sea est diam</p>
                <a class="border-bottom text-decoration-none" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Features Start -->
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Why Choose Us</h6>
                <h1 class="mb-4">Faster, Safe and Trusted Logistics Services</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <ul class="list-inline">
                    <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                    <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6></li>
                    <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6></li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Pricing Plan Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Pricing Plan</h6>
            <h1 class="mb-4">Affordable Pricing Packages</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                        </h1>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Basic</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                        </h1>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Premium</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="bg-secondary">
                    <div class="text-center p-4">
                        <h1 class="display-4 mb-0">
                            <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small>
                        </h1>
                    </div>
                    <div class="bg-primary text-center p-4">
                        <h3 class="m-0">Business</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center py-4">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                        <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Delivery Team</h6>
            <h1 class="mb-4">Meet Our Delivery Team</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/team-1.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Naveed Memon</h5>
                            <span>Head of Courier South</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/team-2.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Dr Mukhtiar Memon</h5>
                            <span>Head of Operation</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/team-3.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Zeeshan Abro</h5>
                            <span>Head of Courier North</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team card position-relative overflow-hidden border-0 mb-5">
                    <img class="card-img-top" src="img/team-4.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                            <h5 class="font-weight-bold">Alishba Shaikh</h5>
                            <span>Head of Sales and Marketting</span>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
            <h1 class="mb-4">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Our Blog</h6>
            <h1 class="mb-4">Latest From Blog</h1>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Web Design</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                    <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                        style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                        <h4 class="font-weight-bold mb-n1">01</h4>
                        <small class="text-white text-uppercase">Jan</small>
                    </div>
                </div>
                <div class="bg-secondary" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" style="width: 40px; height: 40px;" src="img/user.jpg" alt="">
                            <a class="text-muted ml-2" href="">John Doe</a>
                        </div>
                        <div class="d-flex align-items-center ml-4">
                            <i class="far fa-bookmark text-primary"></i>
                            <a class="text-muted ml-2" href="">Web Design</a>
                        </div>
                    </div>
                    <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                    <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                    <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection
