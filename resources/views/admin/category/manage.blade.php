@extends('layouts.app')

@section('main-content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Category</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Sl.</th>
                                <th class="wd-15p border-bottom-0">Category Name</th>
                                <th class="wd-15p border-bottom-0">Icon</th>
                                <th class="wd-20p border-bottom-0">Status</th>
                                <th class="wd-25p border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ asset( $category->icon ) }}" alt="">
                                </td>
                                <td>{{ $category->status }}</td>
                                <td>
                                    <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info" title="Category Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('category.delete',$category->id) }}" onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" title="Category Delete">
                                        <i class="fa fa-trash"></i>
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