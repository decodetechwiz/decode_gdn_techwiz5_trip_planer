@extends('admin.header')


@section('dashboard')

<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>

<div class="row g-4">
@foreach($guideview as $gv)

<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{$gv->Guide_profile}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{$gv->Guide_name}}</h5>
                            <small>{{$gv->Guide_designation}}</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-2">
                               
                                <a href="/deleteguide/{{$gv->id}}" class="btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Delete</a>
                            </div>
                </div>


                @endforeach
                </div> 
                            
                @endsection
