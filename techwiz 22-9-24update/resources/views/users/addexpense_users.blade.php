@extends('users.userheader') 
@section('userdashboard')
<h3>Add Expense</h3>
@if(session('addexpensemessage'))

<div
    class="alert alert-success w-50 mt-3"
    role="alert"
>
    <strong>{{session('addexpensemessage')}}</strong>
</div>
@endif
<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
<form action="{{URL::TO('/addexpenseinserted')}}" method="POST" >
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <div class="container">
                                <label for="">Select Amount</label>
</div>
                                    <input type="text" class="form-control"  name="amount" >
                                    <span class="text-danger">@error ('amount'){{$message}}   @enderror</span>

                                </div>
                            
                        
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Add Category</label>
                                </div>
                                <div class="form-floating">

                                <input type="text" class="form-control" name="category" >
                                <span class="text-danger">@error ('category'){{$message}}   @enderror</span>

                                </div>

                                <div class="container">
                                <label for="Contact Number">Add Expense Date</label>
                                </div>

                                <div class="form-floating">

                                <input type="date" class="form-control" name="expense_date">
                                <span class="text-danger">@error ('expense_date'){{$message}}   @enderror</span>

</div>

<div class="container">
    <br>
                                <label for="Contact Number">Add Trip Name</label>
                                </div>

                                <div class="form-floating">
<select name="expensedara" class="form-control ">
<option value="" disabled selected>Choose Trip Name</option>
@foreach($expense as $e)
<option value="{{$e->trip_name}}">{{$e->trip_name}}</option>

@endforeach
</select>
                                <span class="text-danger">@error ('notes'){{$message}}   @enderror</span>

</div>

                                <div class="container">
                                <label for="Contact Number">Add Note</label>
                                </div>

                                <div class="form-floating">

                                <input type="text" class="form-control" name="notes">
                                <span class="text-danger">@error ('notes'){{$message}}   @enderror</span>

</div>



</select>
                            </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Expense</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection