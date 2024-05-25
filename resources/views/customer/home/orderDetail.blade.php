@extends('customer.master')

@section('main-content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Order Details</li>
            </ol>
        </nav>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-success text-bold">Ordered Product(S) Info</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#.</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($order->orderDetails as $detail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset($detail->product_image) }}" height="60" width="80" alt=""></td>
                                    <td>{{ $detail->product_name }}</td>
                                    <td>{{ $detail->product_price }}</td>
                                    <td>{{ $detail->product_quantity }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-success text-bold">Order Details</h6>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">
                        {{ Session('message') }}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Delivery</th>
                                <th>Discount</th>
                                <th>Payable</th>
                                <th>Status</th>
                                <th>Method</th>

                            </tr>
                            <tr>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->order_total }}</td>
                                <td>{{ $order->delivery_charge }}</td>
                                <td>{{ $order->discount }}</td>
                                <td>{{ $order->payment_amount }}</td>

                                <td>
                                    @if($order->order_status=='pending')
                                        <button class="btn btn-info-gradient">Pending</button>
                                    @elseif($order->order_status=='processing')
                                        <button class="btn btn-primary-gradient">Processing</button>
                                    @elseif($order->order_status=='complete')
                                        <button class="btn btn-success-gradient">Complete</button>
                                    @else
                                        <button class="btn btn-danger-gradient">Cancel</button>
                                    @endif
                                </td>
                                <td>
                                    @if($order->payment_method == 'cod')
                                        Cash On Delivery
                                    @else
                                        Online Payment
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title text-bold text-success">Delivery Info.</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Additional Info.</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>{{ $order->delivery->first_name }}</td>
                                <td>{{ $order->delivery->phone }}</td>
                                <td>{{ $order->delivery->email }}</td>
                                <td>{{ $order->delivery->address }}</td>
                                <td>{{ $order->delivery->additional_info }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection