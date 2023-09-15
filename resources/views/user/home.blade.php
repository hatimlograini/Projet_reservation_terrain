<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FOOTBALL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/style.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body class="bg-white">
   <!-- Modal HTML embedded directly into document -->


  <!-- Link to open the modal -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">FOOTBALL</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="html/index.html" class="nav-item nav-link active">Home</a>
                    <a href="html/about.html" class="nav-item nav-link">About Us</a>
                    <a href="html/feature.html" class="nav-item nav-link">Our Features</a>
                    <a href="html/class.html" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="html/blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="html/single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="html/contact.html" class="nav-item nav-link">Contact</a>
                    @if(Route::has('login'))

                    @auth

                    <x-app-layout>

                    </x-app-layout>
                    @endauth

                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->


    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Rent The Best Stadium</h2>

                    @if(Route::has('login'))

                    @auth
                    <form class="main-form" action="{{ route('book', $user->id) }}" method="POST">
                        @csrf
                        <button  type="submit" class="btn btn-lg btn-outline-light mt-4 px-4">Reservez !</button>
                    </form>
                        @else
                        <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                        <a href="{{ route('login') }}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Login</a>
                    @endauth

                    @endif

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Rent The Best Stadium</h2>

                        @if(Route::has('login'))

                        @auth
                        <form class="main-form" action="{{ route('book', $user->id) }}" method="POST">
                            @csrf
                            <button  type="submit" class="btn btn-lg btn-outline-light mt-4 px-4">Reservez !</button>
                        </form>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Login</a>
                        @endauth

                        @endif


                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!-- Carousel End -->


    <!-- Gym Class Start -->
    <div class="container gym-class mb-5">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                    <i class="fa-solid fa-futbol"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Complexe</h3>
                    <p>
                        description
                    </p>
                    @if(Route::has('login'))

                        @auth
                        {{-- <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-4 px-4">{{ $user }}</a> --}}
                        @else
                            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
                        @endauth

                    @endif
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">

                    <h3 class="display-4 mb-3 text-white font-weight-bold">Club</h3>
                    <p>
                        description
                    </p>
                    @if(Route::has('login'))

                        @auth

                        @else
                            <a href="{{ route('register') }}" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
                        @endauth

                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Gym Class End -->


    <!-- About Start -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="assets/img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">Experience</h2>
                <p></p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        
                        <h4 class="font-weight-bold"></h4>
                        <p></p>
                    </div>
                    <div class="col-sm-6">
                        
                        <h4 class="font-weight-bold"></h4>
                        <p></p>
                    </div>
                </div>
                <a href="" class="btn btn-lg px-4 btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    
    <!-- Features End -->


    <!-- GYM Feature Start -->
    
    <!-- GYM Feature End -->


    <!-- Subscribe Start -->
    
    <!-- Subscribe End -->


    <!-- Class Timetable Start -->

    <!-- Class Timetable End -->

    <!-- BMI Calculation Start -->

    <!-- BMI Calculation End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Blog Start -->

    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Fes Morocco</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+212</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-dark pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">FOOTBALL</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="https://kit.fontawesome.com/d7904aa3af.js" crossorigin="anonymous"></script>
    <!-- Contact Javascript File -->
    <script src="assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>
