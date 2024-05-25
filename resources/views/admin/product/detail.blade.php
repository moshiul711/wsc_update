@extends('layouts.app')

@section('main-content')
    <div class="container-fluid py-5">
        {{--<h1 class="py-5 text-center">Product Detail</h1>--}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title text-center">Product Detail information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($product->image) }}" height="300" width="300" alt="No Image Found">
                                <p class="text-muted text-center">Fig: {{$product->name}}</p>

                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" class="p-2" alt="" height="100" width="100"/>
                                @endforeach
                                <p class="text-muted text-center">Fig: Other Images</p>
                            </div>
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom">
                                        <tr>
                                            <th>Product ID</th>
                                            <td>{{$product->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Name</th>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Model</th>
                                            <td>{{$product->model}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Category</th>
                                            <td>{{$product->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Sub Category</th>
                                            <td>{{$product->subCategory->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Brand</th>
                                            <td>{{$product->brand->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Price</th>
                                            <td><b>Costing Price</b> {{$product->cost}}, <b>Regular Price</b> {{$product->regular_price}} , <b>Offer Price</b> {{$product->offer_price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Stock Amount</th>
                                            <td>{{$product->stock}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Status</th>
                                            <td>
                                                @if($product->status==1)
                                                    <button class="btn btn-success btn-sm">Active</button>
                                                @else
                                                    <button class="btn btn-danger btn-sm">InActive</button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Product Sales Count</th>
                                            <td>{{$product->sales_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Total View</th>
                                            <td>{{$product->hit_count}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Short Description</th>
                                            <td>{{$product->short_description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Long Description</th>
                                            <td>{!! $product->long_description !!}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection