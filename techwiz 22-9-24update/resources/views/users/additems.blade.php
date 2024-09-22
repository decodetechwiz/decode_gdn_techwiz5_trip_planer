@extends('users.userheader') 
@section('userdashboard')
<h3>Add Itinerary Items</h3>
<center>
@if(session('itemsmessage'))
<div class="alert alert-success w-50" role="alert">
  {{session('itemsmessage')}}
</div>

@endif
</center>


<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/insertitem')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number"> Transport</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="itemtransport" required="">
                                

                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Lodging</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="itemLodging" required="">
                                

                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Activities</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="itemactivities" required="">
                                

                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Accommodation</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="itemaccommodation" required="">
                                

                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add itineraryitems</button>
                            </div>
                        </div>
                    </form>

                            

</div>
</div>



@endsection