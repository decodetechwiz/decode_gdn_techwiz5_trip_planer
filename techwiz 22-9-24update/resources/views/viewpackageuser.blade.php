@extends('layoutsHF.header_footer')

@section('themecontent')
<link href="../theme/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../theme/lib/owlcarousel/assets/owl.carousel.min.css"
            rel="stylesheet">
        <link href="../theme/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
            rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../theme/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../theme/css/style.css" rel="stylesheet">


<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
<div class="row g-4 justify-content-center">

<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="../{{$packageview->Packages_image}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$packageview->Packages_location}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$packageview->Package_days}} days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$packageview->Package_persons}} Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$packageview->Package_price}}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{$packageview->Package_description}}</p>
                            <div class="d-flex justify-content-center mb-2">
                               
                                <a href="packagesuser/{id}" class="btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
          
       
                        </div>


                        <script src="../theme/lib/wow/wow.min.js"></script>
            <script src="../theme/lib/easing/easing.min.js"></script>
            <script src="../theme/lib/waypoints/waypoints.min.js"></script>
            <script src="theme/lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="../theme/lib/tempusdominus/js/moment.min.js"></script>
            <script src="../theme/lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="../theme/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Template Javascript -->
            <script src="../theme/js/main.js"></script>

@endsection