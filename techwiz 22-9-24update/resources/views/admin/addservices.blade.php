@extends('admin.header')


@section('dashboard')

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
                <form action="{{URL::TO('/insertservices')}}" method="POST">
                        @csrf
                        
                        <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Choose Icon</label>
                                </div>
                          

                                <div class="form-floating">
<select class="form-control" id="" name="serviceicon">
<option value="" disabled selected>Choose icon</option>
<option value="fa fa-3x fa-globe">globe</option>
<option value="fa fa-3x fa-hotel">hotel</option>
<option value="fa fa-3x fa-user">user</option>
<option value="fa fa-3x fa-cog">cog</option>
<option value="fa fa-3x fa-map">map</option>
<option value="fa fa-3x fa-money-bill">money-bill</option>
<option value="fa fa-3x fa-hotel">hotel</option>
<option value="fa fa-3x fa-car">car</option>
<option value="fa fa-3x fa-ticket-alt">ticket-alt</option>
<option value="fa fa-3x fa-plane">plane</option>

</select>


                                </div>
                            </div>


                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Service Name</label>
                                </div>
                          

                                <div class="form-floating">
                                <input type="text" class="form-control" id="service_name" name="servicename" >
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="container">
                                <label for="Contact Number">Service Description</label>
                                </div>
                          

                                <div class="form-floating">

                                <input type="text" class="form-control" id="service_name" name="servicedescription">
                            </div>

                            </select>
                            </div>
                            </div>


                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3 mt-3" type="submit">Add Guide</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection