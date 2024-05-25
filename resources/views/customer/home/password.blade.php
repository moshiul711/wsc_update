@extends('customer.master')

@section('main-content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ Session('customer_name') }} Profile</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer.profile') }}">{{ Session('customer_name') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="card">
            <form action="{{ route('customer.password.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">Old Password<span class="text-red">*</span></label>
                                <input type="password" class="form-control"  placeholder="Old Password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">New Password<span class="text-red">*</span></label>
                                <input type="password" class="form-control"  name="new_password" placeholder="New Password">
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Confirm New Password<span class="text-red">*</span></label>
                                <input type="password" class="form-control" placeholder="Confirm New Password" name="confirm_new_password">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-outline-success" style="display: block;width: 100%"><h5>Change Password</h5></button>
                </div>
            </form>
        </div>
    </div>
    <!-- ROW-1 END-->
@endsection