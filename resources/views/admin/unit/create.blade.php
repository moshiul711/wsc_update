@extends('layouts.app')

@section('main-content')

    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Unit Create Form</h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('unit.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <p>Unit Name:</p>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Unit Name">
                        </div>

                        <div class="form-group">
                            <p>Unit Name:</p>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Unit Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">In Active</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <div>
                                <button type="submit" class="btn btn-primary">Create New Unit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection