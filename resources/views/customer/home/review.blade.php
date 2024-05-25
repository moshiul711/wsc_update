@extends('customer.master')

@section('main-content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Reviews</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Reviews</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Image</th>
                                <th class="wd-15p border-bottom-0">Product</th>
                                <th class="wd-20p border-bottom-0">Review</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reviews as $review)
                            <tr>
                                <td>
                                    <img src="{{ asset($review->product->image) }}" alt="">
                                </td>
                                <td>{{ $review->product->name }}</td>
                                <td>{{ $review->review }}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END-->
@endsection