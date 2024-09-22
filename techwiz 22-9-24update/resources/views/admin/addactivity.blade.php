@extends('admin.header')


@section('dashboard')

<h3>Add Activity</h3>

@if(session('activitymessage'))

<div
    class="alert alert-success w-50 mt-3"
    role="alert"
>
    <strong>{{session('activitymessage')}}</strong>
</div>



@endif

<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/insertactivity')}}" method="POST">
                        @csrf

                        <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Activity Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" name="activityname" >
                                </div>
                            </div>
<div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <div class="container">
                                <label for="trip_name">Start Date</label>
</div>
                                    <input type="date" class="form-control" id="trip_name" name="activstart_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('activstart_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="container">
                                    <label for="start_date">End Date</label>

                                    </div>

                                    <input type="date" class="form-control"  name="activend_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('activend_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Location</label>
                                </div>
                          

                                <div class="form-floating">

                                <input type="text" class="form-control" id="service_name" name="activlocation">
                            </div>



                        
                        <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Expense Category</label>
                                </div>
                          

                                <div class="form-floating">
<select class="form-control" id="" name="expense_category">
<option value="" disabled selected>Choose Category</option>
<option value="Transportation">Transportation</option>
<option value="Lodging">Lodging</option>
<option value="Miscellaneous expenses">Miscellaneous expenses</option>
<option value="Meals">Meals</option>
<option value="Accommodation expenses">Accommodation expenses</option>
<option value="Air travel">Air travel</option>
<option value="Entertainment">Entertainment</option>
<option value="Food">Food</option>
<option value="Miscellaneous travel expenses">Miscellaneous travel expenses</option>

</select>


                                </div>
                            </div>


                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Amount</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="service_name" name="activamount" >
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Payment Method</label>
                                </div>
                          

                                <div class="form-floating">
<select class="form-control" id="" name="activpayment">
<option value="" disabled selected>Choose Payment Method</option>
<option value="Cash">Cash</option>
<option value="Bank Transfer">Bank Transfer</option>
<option value="Credit Card">Credit Card</option>
<option value="Debit Card">Debit Card</option>


</select>


                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Notes</label>
                                </div>
                          

                                <div class="form-floating">

                                <input type="text" class="form-control" id="service_name" name="activnotes">
                            </div>

                            </select>
                            </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3 form-control" type="submit">Add Recent Activity</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection