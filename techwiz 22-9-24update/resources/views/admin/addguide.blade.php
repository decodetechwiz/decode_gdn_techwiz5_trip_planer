@extends('admin.header')


@section('dashboard')

<h3>Add Our Guides</h3>

@if(session('guidemessage'))

<div
    class="alert alert-success w-50 mt-3"
    role="alert"
>
    <strong>{{session('guidemessage')}}</strong>
</div>



@endif

<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/insertguides')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <div class="container">
                                <label for="">Select Profile</label>
</div>

<input type="file" class="form-control" id="guide_pic" name="guideprofile" >
                                </div>
                            </div>


                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Guide Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="guidename" >
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Designation</label>
                                </div>
                          

                                <div class="form-floating">

                                <input type="text" class="form-control" id="trip_name" name="guidedesignation">
                            </div>

                            </select>
                            </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Guide</button>
                            </div>
                        </div>
                    </form>
                </div>
@endsection