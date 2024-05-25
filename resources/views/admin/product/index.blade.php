@extends('layouts.app')

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Products</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead class="text-center">
                            <tr>
                                <th class="wd-15p border-bottom-0"></th>
                                <th class="wd-15p border-bottom-0">Category</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Offer</th>
                                <th class="wd-15p border-bottom-0">Regular</th>
                                <th class="wd-20p border-bottom-0">Stock</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-20p border-bottom-0">Sales</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody class="text-justify">
                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="{{ asset($product->image) }}" height="40" width="60" alt="">
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->offer_price }}</td>
                                    <td>{{ $product->regular_price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        @if($product->status == 1)
                                            <button class="btn btn-sm btn-success">Active</button>
                                        @else
                                            <button class="btn btn-sm btn-danger">Disable</button>
                                        @endif
                                    </td>

                                    <td>{{ $product->sales_count }}</td>

                                    <td>
                                        <a href="{{route('product.show',$product->id)}}" target="_blank" class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this?')">
                                            <form action="{{route('product.destroy',$product->id)}}" id="deleteForm{{$product->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" data-id="{{$product->id}}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection