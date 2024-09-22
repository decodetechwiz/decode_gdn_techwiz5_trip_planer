@extends('layoutsHF.header_footer')

@section('themecontent') 


<!-- hear section start -->

<style>
#hero-header5{
      background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url('../../theme/img/serviceHomeImg.jpg');
      background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


<div id="hero-header5" class="container-fluid bg-primary py-5 mb-5 hero-header">
                <div class="container py-5">
                    <div class="row justify-content-center py-5">
                        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                            <h1 class="display-3 text-white mb-3 animated
                                slideInDown">Plan Your Dream Trip with
                                ExpenseVoyage</h1> 
                                
                                <!-- <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- hear section start -->



<!-- Service Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
            @foreach($serviceView as $sv)
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="{{$sv->Service_icon}} text-primary
                                        mb-4"></i>
                            <h5>{{$sv->Service_name}}</h5>
                            <p>{{$sv->Service_description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection