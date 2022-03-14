@extends('admin.layout')
@section('content')


<div class="container">
    <div clas="row">
        <div class="col-6 mx-auto mt-10">
            <form method="POST" action="{{route('category.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Add form <small>new category</small></a>
                                <div class="clearfix"></div>
                            </h2>
                        </div>
                        <div class="x_content">
                            <br>
                            <form id="demo-form2" data-parsley-validate="" class="
                form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md -3 col-sm-3 col-xs -12" for="first-name">
                                        Category Name <span class="required"> *</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="name" required=" required" class="
                form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                        Sub category of <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="category_id" class="form-control col-md-7 col-xs-12">
                                            <option value->No Subcategorys</option>
                                        </select>
                                    </div>
<div>


</div>

                                </div>
                                <div class="ln_solid "></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>


                
                @endsection