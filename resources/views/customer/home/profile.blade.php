@extends('customer.master')

@section('main-content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">{{ $customer->first_name.' '.$customer->last_name }} Profile</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer.profile') }}">{{ Session('customer_name') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <form action="{{ route('customer.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" value="{{ $customer->first_name }}" placeholder="First name" name="first_name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" value="{{ $customer->last_name }}" name="last_name" placeholder="Last name">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email address <span class="text-red">*</span></label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $customer->email }}">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone <span class="text-red">*</span></label>
                                    <input type="tel" value="{{ $customer->phone }}" name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Address <span class="text-red">*</span></label>
                                    <textarea class="form-control" placeholder="Home Address" name="address">{{ $customer->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">City <span class="text-red">*</span></label>
                                    <select name="city" class="form-control">
                                        <option value="">---Select City---</option>
                                        <option {{ $customer->city == 'dhaka'?'selected':'' }} value="dhaka">Dhaka</option>
                                        <option {{ $customer->city == 'chittagong'?'selected':'' }} value="chittagong">Chittagong</option>
                                        <option {{ $customer->city == 'rajshahi'?'selected':'' }} value="rajshahi">Rajshahi</option>
                                        <option {{ $customer->city == 'khulna'?'selected':'' }} value="khulna">Khulna</option>
                                        <option {{ $customer->city == 'barishal'?'selected':'' }} value="barishal">Barishal</option>
                                        <option {{ $customer->city == 'mymensingh'?'selected':'' }} value="mymensingh">Mymensingh</option>
                                        <option {{ $customer->city == 'rongpur'?'selected':'' }} value="rongpur">Rongpur</option>
                                        <option {{ $customer->city == 'sylhet'?'selected':'' }} value="sylhet">Sylhet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Postal Code <span class="text-red">*</span></label>
                                    <input type="number" value="{{ $customer->postal_code }}" name="postal_code" class="form-control" placeholder="Post Code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success" style="display: block;width: 100%"><h5>Update Profile</h5></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ROW-1 END-->
@endsection