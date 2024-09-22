@extends('admin.header')
@section('dashboard')

<h3>Add Categories</h3>
<div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{URL::TO('/insercategories')}}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                <div class="container">
                                    <br/>
                                    <br/>
                                <label >Categories Name</label>
</div>
                                    <input type="text" class="form-control"  name="categoryname">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3 mt-3" >Add Category</button>
                            </div>
                        </div>
                    </form>
                </div>

@endsection