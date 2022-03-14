
@extends('admin.layout')
@section('content')




<div class="container">
      
     <div clas="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                <h2> edit category <small>new category</small></a></h2>
                <div class="clearfix"></div>
                </div>



                <div class="x_content">
                <br>
              
                <form id="demo-form2"  method="post" action="{{route('category.update',$category->id)}}" class="
                form-horizontal form-label-left">
                @csrf
                
                <div class="form-group">
                <label class="control-label col-md -3 col-sm-3 col-xs -12" for="first-name">
                Category Name <span class="required"> *</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" value="{{$category->name}}" name ="name" required=" required" class="
                form-control col-md-7 col-xs-12">
                </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="parent_id" class="form-control col-md-7 col-xs-12">
                    <option value="" @if($category->parent_id==null) selected @endif
                    >No Subcategory</option>

                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}" @if($category->
                    parent_id!=null && $category->parent_id==$categorie->id)
                    selected @endif>{{$categorie->name}}</option>
                    @endforeach
                    </select>
                </div>


               
                <div class="ln_solid "></div>
                <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Edit</button>
                </div>
                </div>
                </br>
</form>
                </div>

        </div>
    </div>
 



endsection