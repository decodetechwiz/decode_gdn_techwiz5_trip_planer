@extends('admin.header')


@section('dashboard')


<div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Activity Name</th>                    
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th>Expense Category</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($activview as $av)
                        
                        <tr>
                            <td>{{$av->id}}</td>
                            <td>{{$av->Activity_name}}</td>
                            <td>{{$av->start_date}}</td>
                            <td>{{$av->end_date}}</td>
                            <td>{{$av->Location}}</td>
                            <td>{{$av->Expense_category}}</td>
                            <td>{{$av->Amount}}</td>
                            <td>{{$av->Payment_method}}</td>
                            <td>{{$av->Notes}}</td>
                            <td><a href="/deleteactivity/{{$av->id}}" class="btn btn-danger">Delete</a></td>
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>

@endsection