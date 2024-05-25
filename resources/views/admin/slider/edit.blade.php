@extends('layouts.app')

@section('main-content')

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Slider</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Slider Image Update Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <img src="{{ asset($slider->image) }}" class=" img img-thumbnail" height="300" width="300" alt="">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control"  name="image" >
                        </div>

                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">update Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection