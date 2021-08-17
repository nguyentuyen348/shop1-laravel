@extends('backends.layouts.master')
@section('content')

    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>PRODUCTS</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>
                <div class="col-md-4">
                    <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text"
                    value="{{$product->name}}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product image">PRODUCT IMAGE</label>
                <div class="col-md-4">
                    <input id="" name="image" placeholder="" class="form-control input-md" type="file"
                    value="{{asset('storage/'.$product->image)}}">
                    <img src="{{asset('storage/'.$product->image)}}" style="width: 100px; height: 100px" alt="">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT BRAND</label>
                <div class="col-md-4">
                    <input id="" name="brand" placeholder="" class="form-control input-md" required="" type="text"
                           value="{{$product->brand}}">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT SIZE</label>
                <div class="col-md-4">
                    <input id="" name="size" placeholder="" class="form-control input-md" required="" type="text"
                           value="{{$product->size}}">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT CATEGORY</label>
                <div class="col-md-4">
                    <input id="" name="category" placeholder="" class="form-control input-md" required="" type="text"
                           value="{{$product->category}}">

                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT GENDER</label>
                <div class="col-md-4">
                    <input id="" name="gender" placeholder="" class="form-control input-md" required="" type="text"
                           value="{{$product->gender}}">
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT DESCRIPTION</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="" name="description" >{{$product->description}}"</textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="">PRODUCT PRICE</label>
                <div class="col-md-4">
                    <input id="" name="price" placeholder="" class="form-control input-md" required="" type="text"
                           value="{{$product->price}}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </fieldset>
    </form>

@endsection

