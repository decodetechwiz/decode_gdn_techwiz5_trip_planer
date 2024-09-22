@extends('admin.header')


@section('dashboard')
<h3>Add Packages</h3>
@if(session('packagemessage'))

<div
    class="alert alert-success w-50 mt-3"
    role="alert"
>
    <strong>{{session('packagemessage')}}</strong>
</div>



@endif
<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/insertpackages')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <div class="container">
                                <label for="">Select Image</label>
</div>
                                    <input type="file" class="form-control" id="trip_name" name="packagefile" required>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="container">
                                    <label for="start_date">End Date</label>

                                    </div>

                                    <input type="date" class="form-control" id="start_date" name="tripedate" >
                                </div>
                            </div> -->
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Package Location</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="packagelocation" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Package Days</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="packagedays" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Package Persons</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="packagePersons" required>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Package Price</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="packageprice" required>
                                </div>
                            </div>
                          

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Package Description</label>
                                </div>
                          

                                <div class="form-floating">

                                <input type="text" class="form-control" id="trip_name" name="packagedescription" required>
                            </div>



</select>
                            </div>
                            </div>

                            <!-- <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Budget</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="trip_budget" >
                                </div>
                            </div> -->
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Packages</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection