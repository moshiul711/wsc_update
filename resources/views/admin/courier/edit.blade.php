@extends('layouts.app')

@section('main-content')

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Courier Edit Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('courier.update',['id'=>$courier->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <p>Courier Name : </p>
                            <input type="text" class="form-control" value="{{ $courier->name }}" id="inputName" name="name" placeholder="Category Name">
                        </div>

                        <div class="form-group">
                            <p>Courier Charge : </p>
                            <input type="number" class="form-control" value="{{ $courier->charge }}" id="inputName" name="charge" placeholder="Courier Charge">
                        </div>


                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Update Courier Info.</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection