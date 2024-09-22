@extends('admin.header')
@section('dashboard')
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
                        @foreach($viewexpen as $v)
                        
                        <tr>
                            <td>{{$v->id}}</td>
                            <td>{{$v->amount}}</td>
                            <td>{{$v->category}}</td>
                            <td>{{$v->expense_date}}</td>
                            <td>{{$v->trip_name}}</td>
                            <td>{{$v->notes}}</td>
                            <td><a href="/deleteexpense/{{$v->id}}" class="btn btn-danger">Delete</a></td>
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>



@endsection