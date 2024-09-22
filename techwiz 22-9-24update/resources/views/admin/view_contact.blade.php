@extends('admin.header')


@section('dashboard')


<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Contact</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>C Name</th>
                            <th>C Email</th>
                            <th>C Number</th>
                            <th>C Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $d)
                        
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->Name}}</td>
                            <td>{{$d->Email}}</td>
                            <td>{{$d->Contact_number}}</td>
                            <td>{{$d->Message}}</td>
                            <td><a onclick="return confirm('Are You Sure This Message Delete')" class="btn btn-danger" href="{{url('/contactus_delete' , $d->id)}}">Delete</a></td>
                            

                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                   

                </table>
                </div>
                
            </div>



@endsection