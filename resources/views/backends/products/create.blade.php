@extends('backends.layouts.master')
@section('content')

<form class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset>

        <!-- Form Name -->
       <div id="add-product-text"> <h3>ADD PRODUCTS</h3> </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product_name">NAME</label>
            <div class="col-md-4">
                <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="product image">IMAGE</label>
            <div class="col-md-4">
                <input id="" name="image" placeholder="" class="form-control input-md" type="file">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">BRAND</label>
            <div class="col-md-4">
                <input id="" name="brand" placeholder="" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">SIZE</label>
            <div class="col-md-4">
                <input id="" name="size" placeholder="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">CATEGORY</label>
            <div class="col-md-4">
                <input id="" name="category" placeholder="" class="form-control input-md" required="" type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">GENDER</label>
            <div class="col-md-4">
                <input id="" name="gender" placeholder="" class="form-control input-md" required="" type="text">
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">DESCRIPTION</label>
            <div class="col-md-4">
                <textarea class="form-control" id="" name="description"></textarea>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="">PRICE</label>
            <div class="col-md-4">
                <input id="" name="price" placeholder="" class="form-control input-md" required="" type="text">
            </div>
        </div>
        <button id="add-product-button" type="submit" class="btn btn-primary">ADD</button>
   </fieldset>
</form>

@endsection
