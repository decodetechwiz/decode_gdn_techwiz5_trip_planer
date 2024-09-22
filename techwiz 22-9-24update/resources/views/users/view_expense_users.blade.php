@extends('users.userheader') 
@section('userdashboard')
<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Expense</h1>
                
                @if(session('expensemessage'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('expensemessage')}}</strong>
</div>


@endif
</center>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Amount</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Trip Name</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($viewusersexpen as $e)
                        
                        <tr>
                            <td>{{$e->id}}</td>
                            <td>{{$e->amount}}</td>
                            <td>{{$e->category}}</td>
                            <td>{{$e->expense_date}}</td>
                            <td>{{$e->trip_name}}</td>
                            <td>{{$e->notes}}</td>
                            <td><a href="/deleteexpense/{{$e->id}}" class="btn btn-danger">Delete</a></td>
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>


                </table>
                </div>
            </div>
@endsection