@extends('admin.header')


@section('dashboard')

<link rel="stylesheet" href="../admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="../admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../admin/admin/images/favicon.png" />



<div class="container">
                <h1 class="text-center my-5 text-primary my-5">View Trips</h1>
                
                @if(session('viewtripmessage'))
                <center>
<div
    class="alert alert-danger w-50 mt-3"
    role="alert"
>
    <strong>{{session('viewtripmessage')}}</strong>
</div>


@endif
</center>
                <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Id</th>
                            <th>Trip Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Destination</th>
                            <th>Budget</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                   
                    <tbody>
                        @foreach($posts as $p)
                        
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->user->id}}</td>
                            <td>{{$p->trip_name}}</td>
                            <td>{{$p->start_date}}</td>
                            <td>{{$p->end_date}}</td>
                            <td>{{$p->destination}}</td>
                            <td>{{$p->budget}}</td>
                            <td><a class="btn btn-primary mx-1" href="{{url('edit_trip' , $p->id)}}">Edit</a><a href="/viewtripmessage/{{$p->id}}" class="btn btn-danger">Delete</a></td>
                            
                       
                        </tr>
                        
                        @endforeach
                       

                    </tbody>

                   

                </table>
                </div>
                
            </div>



@endsection