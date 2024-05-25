@extends('layouts.app')

@section('main-content')

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Category Edit Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <p>Category Name : </p>
                            <input type="text" class="form-control" id="inputName" value="{{ $category->name }}" name="name" placeholder="Category Name">
                            <input type="hidden" class="form-control" id="inputName" value="{{ $category->icon }}" name="icon" >
                        </div>

                        <div class="form-group">
                            <p>Select Category Status : </p>
                            <select name="status" id="" class="form-control">
                                <option value="active"{{ $category->status == 'active' ? 'selected':'' }}>Active</option>
                                <option value="inactive" {{ $category->status == 'inactive' ? 'selected':'' }}>In Active</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <p>Category Icon : </p>
                            <img class="img pb-2" src="{{ asset( $category->icon ) }}" alt="">
                            <input type="file" class="form-control" id="inputName" name="icon" >
                        </div>

                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection