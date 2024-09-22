@extends('admin.header')


@section('dashboard')


<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Auth Data</h1>

                @if(session('authmessagedelete'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('authmessagedelete')}}</strong>
</div>
</center>


@endif

                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> User Name</th>
                            <th> User Email</th>
                            <th> User Status </th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>
                            @if($d->role == 0)
                            <span class="text-warning"><b>USER</b></span> 
                            @else
                            <span class="text-success"><b>ADMIN</b></span>
                            @endif
    </td>
                       
                            <td><a  class="btn btn-danger" href="{{url('/auth_delete' , $d->id)}}">Delete</a></td>
                            

                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                   

                </table>
                </div>
                
            </div>



@endsection