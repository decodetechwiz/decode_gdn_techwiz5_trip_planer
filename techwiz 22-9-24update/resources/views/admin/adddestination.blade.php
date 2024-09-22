@extends('admin.header')


@section('dashboard')

<center>
@if(session('adddestination'))
<div class="alert alert-success w-50" role="alert">
  {{session('adddestination')}}
</div>
@endif
</center>

<h3>Add Destination</h3>
<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/adddestination')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <div class="container">
                                    <br/>
                                    <br/>
                                <label for="trip_name">Destination Name</label>
</div>
                                    <input type="text" class="form-control" id="trip_name" name="destination_name" >
                                    <span class="text-danger">@error('destination_name'){{$message}}@enderror</span>

                                </div>
                            </div>
                           
                  
                          


                        
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Destination</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection