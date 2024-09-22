@extends('layoutsHF.header_footer')

@section('themecontent')

<!-- hear section start -->
<style>
#hero-header1{
      background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url('../../theme/img/homeHeroImg.jpg');
      background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


<div id="hero-header1" class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Welcome to ExpenseVoyage, your
                                    go-to tool for effortless trip planning.
                                    Whether it's a short trip or a long
                                    adventure, we help you budget, plan, and
                                    manage every detail, so you can focus on
                                    enjoying the journey!</p>
                    </div>
                </div>
            </div>
        </div>

<!-- hear section start -->

            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s"
                            style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="img-fluid position-absolute w-100
                                    h-100" src="theme/img/about.jpg" alt=""
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp"
                            data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start
                                text-primary pe-3">About Us</h6>
                            <h1 class="mb-4">Welcome to <span
                                    class="text-primary">ExpenseVoyage</span></h1>
                            <p class="mb-4"> your ultimate trip planning assistant. We specialize in helping travelers organize every aspect of their journey, ensuring a seamless and stress-free experience. Whether it's planning your itinerary, budgeting your expenses, or finding the best deals, ExpenseVoyage is here to simplify your travel preparations.
                                </p>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i>Plan Customized </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i> Track Expenses </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i>Discover Affordable Flights </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i>Coordinate Transportation 
                                        </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i> Get Local Insights and Travel Tips for over 150 destinations</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right
                                            text-primary me-2"></i> Access 24/7 Support to ensure your trip goes smoothly</p>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!--  upcoming trips -->
            <div class="container">
                <h1 class="text-center my-5 text-primary my-5">Our Upcoming Trips</h1>
                
                

                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            
                            
                            <th>Trip Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Destination</th>
                            <th>Budget</th>
                            
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($posts as $p)
                        
                        <tr>
                            
                            
                            <td>{{$p->trip_name}}</td>
                            <td>{{$p->start_date}}</td>
                            <td>{{$p->end_date}}</td>
                            <td>{{$p->destination}}</td>
                            <td>{{$p->budget}}</td>
                            
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>


<!-- upcoming trips end -->

<!-- recent activities -->
<div class="container">
                <h1 class="text-center my-5 text-primary my-5">Our Recent Activities</h1>

<div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            
                            <th>Activity Name</th>                    
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Expense Category</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Notes</th>
                            
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($recactivity as $av)
                        
                        <tr>
                            
                            <td>{{$av->Activity_name}}</td>
                            <td>{{$av->start_date}}</td>
                            <td>{{$av->end_date}}</td>
                            <td>{{$av->Location}}</td>
                            <td>{{$av->Expense_category}}</td>
                            <td>{{$av->Amount}}</td>
                            <td>{{$av->Payment_method}}</td>
                            <td>{{$av->Notes}}</td>
                            
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>
<!-- end recent activity -->


            <!-- Service Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center
                            text-primary px-3">Services</h6>
                        <h1 class="mb-5">Our Services</h1>
                    </div>
                    <div class="row g-4">
                    @foreach($serviceView as $sv)
                        <div class="col-lg-3 col-sm-6 wow fadeInUp"
                            data-wow-delay="0.1s">
                            <div class="service-item rounded pt-3">
                                <div class="p-4">
                                    <i class="{{$sv->Service_icon}} text-primary
                                        mb-4"></i>
                                    <h5>{{$sv->Service_name}}
                                        </h5>
                                    <p>{{$sv->Service_description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach   
                    </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Destination Start -->
            <div class="container-xxl py-5 destination">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center
                            text-primary px-3">Destination</h6>
                        <h1 class="mb-5">Popular Destination</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-7 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-12 wow zoomIn"
                                    data-wow-delay="0.1s">
                                    <a class="position-relative d-block
                                        overflow-hidden" href="">
                                        <img class="img-fluid"
                                            src="theme/img/package1.jpg" alt="">
                                        <div class="bg-white text-danger fw-bold
                                            position-absolute top-0 start-0 m-3
                                            py-1 px-2">30% OFF</div>
                                        <div class="bg-white text-primary
                                            fw-bold position-absolute bottom-0
                                            end-0 m-3 py-1 px-2">Thailand</div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn"
                                    data-wow-delay="0.3s">
                                    <a class="position-relative d-block
                                        overflow-hidden" href="">
                                        <img class="img-fluid"
                                            src="theme/img/package2.jpg" alt="">
                                        <div class="bg-white text-danger fw-bold
                                            position-absolute top-0 start-0 m-3
                                            py-1 px-2">25% OFF</div>
                                        <div class="bg-white text-primary
                                            fw-bold position-absolute bottom-0
                                            end-0 m-3 py-1 px-2">Malaysia</div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn"
                                    data-wow-delay="0.5s">
                                    <a class="position-relative d-block
                                        overflow-hidden" href="">
                                        <img class="img-fluid"
                                            src="theme/img/package3.jpg" alt="">
                                        <div class="bg-white text-danger fw-bold
                                            position-absolute top-0 start-0 m-3
                                            py-1 px-2">35% OFF</div>
                                        <div class="bg-white text-primary
                                            fw-bold position-absolute bottom-0
                                            end-0 m-3 py-1 px-2">Australia</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 wow zoomIn"
                            data-wow-delay="0.7s" style="min-height: 350px;">
                            <a class="position-relative d-block h-100
                                overflow-hidden" href="">
                                <img class="img-fluid position-absolute w-100
                                    h-100" src="theme/img/package4.jpg" alt=""
                                    style="object-fit: cover;">
                                <div class="bg-white text-danger fw-bold
                                    position-absolute top-0 start-0 m-3 py-1
                                    px-2">20% OFF</div>
                                <div class="bg-white text-primary fw-bold
                                    position-absolute bottom-0 end-0 m-3 py-1
                                    px-2">Indonesia</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Destination Start -->


            <!-- Package Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center
                            text-primary px-3">Packages</h6>
                        <h1 class="mb-5">Awesome Packages</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        @foreach($packageview as $pv)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{$pv->Packages_image}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$pv->Packages_location}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$pv->Package_days}} days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$pv->Package_persons}} Person</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$pv->Package_price}}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{$pv->Package_description}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/packageview/{{$pv->id}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- Package End -->


           

            <!-- Process Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center pb-4 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center
                            text-primary px-3">Process</h6>
                        <h1 class="mb-5">3 Easy Steps</h1>
                    </div>
                    <div class="row gy-5 gx-4 justify-content-center">
                        <div class="col-lg-4 col-sm-6 text-center pt-4 wow
                            fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative border border-primary
                                pt-5 pb-4 px-4">
                                <div class="d-inline-flex align-items-center
                                    justify-content-center bg-primary
                                    rounded-circle position-absolute top-0
                                    start-50 translate-middle shadow"
                                    style="width: 100px; height: 100px;">
                                    <i class="fa fa-globe fa-3x text-white"></i>
                                </div>
                                <h5 class="mt-4">Choose A Destination</h5>
                                <hr class="w-25 mx-auto bg-primary mb-1">
                                <hr class="w-50 mx-auto bg-primary mt-0">
                                <p class="mb-0">Tempor erat elitr rebum clita
                                    dolor diam ipsum sit diam amet diam eos erat
                                    ipsum et lorem et sit sed stet lorem sit</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center pt-4 wow
                            fadeInUp" data-wow-delay="0.3s">
                            <div class="position-relative border border-primary
                                pt-5 pb-4 px-4">
                                <div class="d-inline-flex align-items-center
                                    justify-content-center bg-primary
                                    rounded-circle position-absolute top-0
                                    start-50 translate-middle shadow"
                                    style="width: 100px; height: 100px;">
                                    <i class="fa fa-dollar-sign fa-3x
                                        text-white"></i>
                                </div>
                                <h5 class="mt-4">Pay Online</h5>
                                <hr class="w-25 mx-auto bg-primary mb-1">
                                <hr class="w-50 mx-auto bg-primary mt-0">
                                <p class="mb-0">Tempor erat elitr rebum clita
                                    dolor diam ipsum sit diam amet diam eos erat
                                    ipsum et lorem et sit sed stet lorem sit</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 text-center pt-4 wow
                            fadeInUp" data-wow-delay="0.5s">
                            <div class="position-relative border border-primary
                                pt-5 pb-4 px-4">
                                <div class="d-inline-flex align-items-center
                                    justify-content-center bg-primary
                                    rounded-circle position-absolute top-0
                                    start-50 translate-middle shadow"
                                    style="width: 100px; height: 100px;">
                                    <i class="fa fa-plane fa-3x text-white"></i>
                                </div>
                                <h5 class="mt-4">Fly Today</h5>
                                <hr class="w-25 mx-auto bg-primary mb-1">
                                <hr class="w-50 mx-auto bg-primary mt-0">
                                <p class="mb-0">Tempor erat elitr rebum clita
                                    dolor diam ipsum sit diam amet diam eos erat
                                    ipsum et lorem et sit sed stet lorem sit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Start -->


            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center
                            text-primary px-3">Travel Guide</h6>
                        <h1 class="mb-5">Meet Our Guide</h1>
                    </div>
                    <div class="row g-4">
                    @foreach($guideview as $gv)
                        <div class="col-lg-3 col-md-6 wow fadeInUp"
                            data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="{{$gv->Guide_profile}}"
                                        alt="">
                                </div>
                                
                                <div class="text-center p-4">
                                    <h5 class="mb-0">{{$gv->Guide_name}}</h5>
                                    <small>{{$gv->Guide_designation}}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Team End -->


           

            @endsection

           