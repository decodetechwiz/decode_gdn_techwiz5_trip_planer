@extends('admin.header')


@section('dashboard')

<center>
@if(session('tripmessage'))
<div class="alert alert-success w-50" role="alert">
  {{session('tripmessage')}}
</div>

@endif
</center>

<h3>Add Trips</h3>
<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/addtrips')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <div class="container">
                                <label for="trip_name">Start Date</label>
</div>
                                    <input type="date" class="form-control" id="trip_name" name="start_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('start_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="container">
                                    <label for="start_date">End Date</label>

                                    </div>

                                    <input type="date" class="form-control"  name="end_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('end_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="trip_name" >
                                <span class="text-danger">@error ('trip_name'){{$message}}   @enderror</span>

                                </div>
                            </div>
                          

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Destination</label>
                                </div>
                          

                                <div class="form-floating">

<select name="destination" class="form-control" id="">

<option value="" disabled selected>Choose Destination</option>

@foreach($data as $d)

<option value="{{$d->Destination_Name}}">{{$d->Destination_Name}}</option>


@endforeach

</select>
<span class="text-danger">@error ('destination'){{$message}}@enderror</span>

                            </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Budget</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="trip_budget" >
                                <span class="text-danger">@error ('trip_budget'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Trips</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection