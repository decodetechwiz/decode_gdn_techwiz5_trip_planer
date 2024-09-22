<!-- @extends('admin.header') -->
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




<h3>Add Services</h3>

@if(session('servicemessage'))

<div
    class="alert alert-success w-50 mt-3"
    role="alert"
>
    <strong>{{session('servicemessage')}}</strong>
</div>



@endif

<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/updateservices/' . $updateid->id)}}" method="POST">
                        @csrf
                        
                        <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Choose Icon</label>
                                </div>
                          

                                <div class="form-floating">
                                <select class="form-control" name="serviceicon">
    <option value="" disabled>Select an icon</option>
    <option value="fa fa-3x fa-globe" {{ $updateid->Service_icon == 'fa fa-3x fa-globe' ? 'selected' : '' }}>globe</option>
    <option value="fa fa-3x fa-hotel" {{ $updateid->Service_icon == 'fa fa-3x fa-hotel' ? 'selected' : '' }}>hotel</option>
    <option value="fa fa-3x fa-user" {{ $updateid->Service_icon == 'fa fa-3x fa-user' ? 'selected' : '' }}>user</option>
    <option value="fa fa-3x fa-cog" {{ $updateid->Service_icon == 'fa fa-3x fa-cog' ? 'selected' : '' }}>cog</option>
    <option value="fa fa-3x fa-map" {{ $updateid->Service_icon == 'fa fa-3x fa-map' ? 'selected' : '' }}>map</option>
    <option value="fa fa-3x fa-money-bill" {{ $updateid->Service_icon == 'fa fa-3x fa-money-bill' ? 'selected' : '' }}>money</option>
    <option value="fa fa-3x fa-car" {{ $updateid->Service_icon == 'fa fa-3x fa-car' ? 'selected' : '' }}>car</option>
    <option value="fa fa-3x fa-ticket-alt" {{ $updateid->Service_icon == 'fa fa fa-3x fa-ticket-alt' ? 'selected' : '' }}>ticket</option>
    <option value="fa fa-3x fa-plane" {{ $updateid->Service_icon == 'fa fa-3x fa-plane' ? 'selected' : '' }}>plane</option>
</select>



                                </div>
                            </div>


                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Service Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control"  name="servicename" value="{{$updateid->Service_name}}">
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Service Description</label>
                                </div>
                                <div class="form-floating">
                                <input type="text" class="form-control" name="servicedescription" value="{{$updateid->Service_description}}">
                            </div>

                            </select>
                            </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3 form-control" type="submit">Update Service</button>
                            </div>
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
           