@extends('backends.layouts.master')
@section('content')

    <p><a id="add-product" class="btn btn-success btn-lg" href="{{route('products.create')}}">ADD PRODUCT</a></p>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">


            @foreach($products as $product)

            <div class="col-sm-3">
                <div class="panel panel-primary">

                    <div class="panel-heading">{{$product->name}}</div>
                    <div class="panel-body" style=""><img src="{{asset('storage/'.$product->image)}}" class="img-responsive"
                                                 style="width:160px;height:180px" alt="{{asset('storage/'.$product->image)}}"></div>
                    <div class="panel-footer">{{$product->price}}</div>
                    <div><a href="{{route('products.detail',$product->id)}}" class="snip1457"
                          style="background: #005cbf">Detail</a></div>
                    <div><a href="{{route('products.edit',$product)}}" class="snip1457"
                          style="background: #005cbf">Update</a></div>
                    <div><a href="{{ route('products.destroy', $product) }}" class="snip1457"
                          style="background:orangered"
                          onclick="return confirm('are you sure?')">Delete</a></div>
                </div>
                </div>


        @endforeach




@endsection
