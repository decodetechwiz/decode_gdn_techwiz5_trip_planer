@extends('admin.header')


@section('dashboard')


<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Category</h1>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($viewcategory as $vw)
                        
                        <tr>
                            <td>{{$vw->id}}</td>
                            <td>{{$vw->Category_name}}</td>
                            <td><a class="btn btn-danger" href="{{url('/deletecategory',$vw->id)}}">Delete</a></td>

                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                   

                </table>
                </div>
                
            </div>



@endsection