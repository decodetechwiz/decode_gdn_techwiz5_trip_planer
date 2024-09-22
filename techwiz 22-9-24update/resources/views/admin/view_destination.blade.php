@extends('admin.header')


@section('dashboard')


<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Destination</h1>

                @if(session('destinationmessage'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('destinationmessage')}}</strong>
</div>


@endif
</center>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Destination Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($data as $d)
                        
                        <tr>
                            <td>{{$d->id}}</td>
                        
                            <td>{{$d->Destination_Name}}</td>
                            
                            
                            <td><a href="/destinationdelete/{{$d->id}}" class="btn btn-danger">Delete</a ></td>
                        
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>



@endsection