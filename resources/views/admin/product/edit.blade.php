@extends('layouts.app')

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Edit</li>
            </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Update Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value)">
                                    <option value=""> -- Select Product Category -- </option>
                                    @foreach($categories as $category)
                                        <option {{ $product->category_id == $category->id?'selected':'' }} value="{{ $category->id }}">{{ $category->name }} {{ '('.count($category->subCategories).' Sub Category)' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select name="sub_category_id" class="form-control" id="subCategoryId">
                                    <option value=""> -- Select Sub Product Category -- </option>
                                    @foreach($subCategories as $sub_category)
                                        <option {{ $product->sub_category_id == $sub_category->id ? 'selected' :'' }} value="{{ $sub_category->id }}">{{ $sub_category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select name="brand_id" class="form-control">
                                    <option value=""> -- Select Product Brand -- </option>
                                    @foreach($brands as $brand)
                                        <option {{ $product->brand_id == $brand->id ? 'selected' :'' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select name="unit_id" class="form-control">
                                    <option value=""> -- Select Product Unit -- </option>
                                    @foreach($units as $unit)
                                        <option {{ $product->unit_id == $unit->id ? 'selected' :'' }} value="{{ $unit->id }}">{{ $unit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ $product->name }}" id="firstName" name="name" placeholder="Product Name" type="text">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Model</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ $product->model }}" name="model" placeholder="Product Model" type="text">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Replacement Warranty</label>
                            <div class="col-md-9">
                                <select name="replacement" id="" class="form-control">
                                    <option value="">----Product Warranty Period----</option>
                                    <option {{ $product->replacement == '6 Month' ?'selected':'' }} value="6 Month">6 Month</option>
                                    <option {{ $product->replacement == '1 Year' ?'selected':'' }} value="1 Year">1 Year</option>
                                    <option {{ $product->replacement == '1.5 Year' ?'selected':'' }} value="1.5 Year">1.5 Year</option>
                                    <option {{ $product->replacement == '2 Year' ?'selected':'' }} value="2 Year">2 Year</option>
                                    <option {{ $product->replacement == 'No' ?'selected':'' }} value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Service Warranty</label>
                            <div class="col-md-9">
                                <select name="service" id="" class="form-control">
                                    <option value="">----Product Service Period----</option>
                                    <option {{ $product->service == '6 Month' ?'selected':'' }} value="6 Month">6 Month</option>
                                    <option {{ $product->service == '1 Year' ?'selected':'' }} value="1 Year">1 Year</option>
                                    <option {{ $product->service == '1.5 Year' ?'selected':'' }} value="1.5 Year">1.5 Year</option>
                                    <option {{ $product->service == '2 Year' ?'selected':'' }} value="2 Year">2 Year</option>
                                    <option {{ $product->service == 'No' ?'selected':'' }} value="No">Warranty Not Available</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Status</label>
                            <div class="col-md-9">
                                <select name="status" class="form-control">
                                    <option> -- Select Product Status -- </option>
                                    <option {{ $product->status == 1 ?'selected':'' }} value="1">Active</option>
                                    <option {{ $product->status == 0 ?'selected':'' }} value="0">InActive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Featured Status</label>
                            <div class="col-md-9">
                                <select name="featured_status" class="form-control">
                                    <option> -- Select Featured Status -- </option>
                                    <option {{ $product->featured_status == 1 ?'selected':'' }} value="1">Active</option>
                                    <option {{ $product->featured_status == 0 ?'selected':'' }} value="0">InActive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Product Stock</label>
                            <div class="col-md-9">
                                <input class="form-control" id="" name="stock" value="{{ $product->stock }}" placeholder="Product Stock" type="int">
                                <input class="form-control" id="" name="code" value="{{ $product->code }}" placeholder="Product Code" type="hidden">
                                {{--<input class="form-control" id="" name="sales" value="{{ $product->code }}" placeholder="Product Code" type="hidden">--}}
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" value="{{ $product->cost }}" name="costing_price" placeholder="Costing Price" type="number">
                                    <input class="form-control" value="{{ $product->regular_price }}" name="regular_price" placeholder="Regular Price" type="number">
                                    <input class="form-control" value="{{ $product->offer_price }}" name="offer_price" placeholder="Offer Price" type="number">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" name="short_description" placeholder="Category Description">{{ $product->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="summernote" name="long_description" placeholder="Category Description">{{ $product->long_description }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Feature Image</label>

                            <div class="col-md-9">
                                <img src="{{ asset($product->image) }}" height="150" width="180" style="padding: 5px" alt="">
                                <input class="form-control" id="email" name="image" type="file">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Other Image</label>
                            <div class="col-md-9">
                                @foreach($product->otherImages as $otherImage)
                                    <img src="{{ asset($otherImage->image) }}" height="80" width="100" class="img img-thumbnail" alt="No Image Found">
                                @endforeach
                                <input class="form-control" id="" multiple name="other_image[]" type="file">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" style="float: right" type="submit">Update Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection