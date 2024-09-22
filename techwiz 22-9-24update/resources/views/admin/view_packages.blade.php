@extends('admin.header')


@section('dashboard')

<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
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
                               
                            <a href="/deletepackage/{{$pv->id}}" class="btn btn-sm btn-danger px-3" style="border-radius: 30px 30px 30px 30px;">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                        @endforeach
       
                        </div>
                        @endsection