<!-- @extends('admin.header') -->
@section('dashboard')

<!-- plugins:css -->
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
                <h1 class="text-center my-5 text-primary">Update Trip</h1>
                <!-- <div class="input-responsive"> -->
                <form action="{{url('update_trip_fetch' , $trip->id)}}" method="POST">
                @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
<div class="card">
    <div class="container">
        <h3>Current Trip Name : {{$trip->trip_name}}</h3>
        <h3>Current Start Date  : {{$trip->start_date}}</h3>
        <h3>Current End Date  : {{$trip->end_date}}</h3>
        <h3>Current Destination   : {{$trip->destination}}</h3>
        <h3>Current Budget   : {{$trip->budget}}</h3>


    </div>


    <form action="{{URL::TO('/update_trip_fetch'.$trip->id)}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <div class="container">
                                <label for="trip_name">Start Date</label>
</div>
                                    <input type="date" class="form-control" id="trip_name" name="start_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('start_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="container">
                                    <label for="start_date">End Date</label>

                                    </div>

                                    <input type="date" class="form-control"  name="end_date" min="{{ \Carbon\Carbon::today()->toDateString() }}">
                                    <span class="text-danger">@error ('end_date'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="trip_name" >
                                <span class="text-danger">@error ('trip_name'){{$message}}   @enderror</span>

                                </div>
                            </div>
                          

                          

                                <div class="form-floating">


<span class="text-danger">@error ('destination'){{$message}}@enderror</span>

                            </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Trip Budget</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="trip_name" name="trip_budget" >
                                <span class="text-danger">@error ('trip_budget'){{$message}}   @enderror</span>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Update Trips</button>
                            </div>
                        </div>
                    </form>
</div>


                                <div class="form-floating">
                                <div class="container">
                              
                            </div>
            
                          


                            
                    

                </form>
              
            </div>

            @endsection

            <!-- plugins:js -->
  <script src=".admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=".admin/vendors/chart.js/Chart.min.js"></script>
  <script src=".admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src=".admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src=".admin/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=".admin/js/off-canvas.js"></script>
  <script src=".admin/js/hoverable-collapse.js"></script>
  <script src=".admin/js/template.js"></script>
  <script src=".admin/js/settings.js"></script>
  <script src=".admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=".admin/js/dashboard.js"></script>
  <script src=".admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
           