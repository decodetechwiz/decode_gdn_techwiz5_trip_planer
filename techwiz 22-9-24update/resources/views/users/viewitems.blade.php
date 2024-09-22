@extends('users.userheader') 
@section('userdashboard')
<h3>View Itinerary Items</h3>

<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Items</h1>
                
                @if(session('itemdelete'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('itemdelete')}}</strong>
</div>


@endif
</center>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Transport</th>
                            <th>Lodging</th>
                            <th>Activities</th>
                            <th>Accommodation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
        @foreach($itemview as $i)
        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->Transport}}</td>
            <td>{{$i->Lodging}}</td>
            <td>{{$i->Activities}}</td>
            <td>{{$i->Accommodation}}</td>
            <td><a href="/itemdelete/{{$i->id}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
</tbody>


                   

                </table>
                </div>
                
            </div>

@endsection